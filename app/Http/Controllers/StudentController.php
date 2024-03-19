<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\Student;
use App\Models\StudentDetail;
use App\Models\Otp;
use App\Mail\OtpMail;
use App\Models\Category;
use App\Models\Chapter;
use App\Models\Payment;
use App\Models\Status;
use Illuminate\Support\Facades\Validator;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;
use Razorpay\Api\Api;

class StudentController extends Controller
{
    public function googleLogin()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleHandle(Request $request)
    {
        try {
            $user = Socialite::driver('google')->user();

            // Check if a user with the Google ID already exists
            $existingUser = Student::where('gauth_id', $user->id)->first();

            if ($existingUser) {
                // Log in the existing user
                Auth::login($existingUser);
                return redirect()->route('/');
            } else {
                // Check if a user with the email already exists
                $userByEmail = Student::where('email', $user->email)->first();

                if ($userByEmail) {
                    // Update the existing user with the Google ID
                    $userByEmail->update(['gauth_id' => $user->id]);
                    Auth::login($userByEmail);
                    return redirect()->route('/');
                } else {
                    // Create a new user
                    $newUser = Student::create([
                        'email' => $user->email,
                        'gauth_id' => $user->id,
                        'gauth_type' => 'google',
                        'password' => bcrypt('password4567'), // Set a default password or handle differently
                    ]);

                    $newUser->studentDetail()->create([
                        'student_id' => $newUser->id,
                        'fullname' => $user->name,
                        'email' => $user->email,
                        'profile' => $user->avatar,
                    ]);

                    // Log in the new user
                    Auth::login($newUser);
                    return redirect()->route('/');
                }
            }
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again later.');
        }
    }
    // Show registration form
    public function showRegistrationForm()
    {
        try {
            return view('layouts.auth.register');
        } catch (\Exception $e) {
            // Log or handle the exception
            return back()->withErrors(['error' => 'An error occurred while loading the registration form.']);
        }
    }


    // Handle registration form submission
    public function register(Request $request)
    {
        try {
            // Validate form input
            $validator = Validator::make($request->all(), [
                'email_or_phone' => [
                    'required',
                    'string',
                    'max:255',
                    Rule::when(
                        function ($input) {
                            return strpos($input->get('email_or_phone'), '@') !== false;
                        },
                        ['email', 'unique:students,email'],
                        ['string', 'unique:students,phone']
                    ),
                ],
                'password' => 'required|string|min:8|confirmed',
            ], [
                'email_or_phone' => 'The :attribute must be a valid email address or phone number.',
                'password.confirmed' => 'The password confirmation does not match.',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            // Generate OTP
            $otp = $this->generateRandomOTP();

            // Send OTP
            if (!$this->sendOTP($request->email_or_phone, $otp)) {
                // Handle case where sending OTP fails
                return back()->withErrors(['email_or_phone' => 'Failed to send OTP. Please try again.']);
            }

            // Extract email and phone from input
            $email = filter_var($request->email_or_phone, FILTER_VALIDATE_EMAIL) ? $request->email_or_phone : null;
            $phone = $email ? null : preg_replace('/[^0-9]/', '', $request->email_or_phone);

            // Store the OTP in the session for verification
            $request->session()->put('otp', $otp);

            // Create a new student record
            $student = Student::create([
                'email' => $email,
                'phone' => $phone,
                'password' => bcrypt($request->password),
            ]);

            // Create associated student detail
            $student->studentDetail()->create([
                'student_id' => $student->id,
                'email' => $email,
                'phone' => $phone,
            ]);

            // Show success message with SweetAlert
            return redirect()->route('student.login')->with('success', 'Registration successful!')->with('alertType', 'success');
        } catch (\Exception $e) {
            // Log or handle the exception
            return back()->withErrors(['error' => 'An error occurred while registering.']);
        }
    }



    // Logout
    public function logout()
    {
        try {
            Auth::guard('student')->logout();
            return redirect('/')->with('success', 'Logged out successfully.');
        } catch (\Exception $e) {
            // Log or handle the exception
            return back()->withErrors(['error' => 'An error occurred while logging out.']);
        }
    }

    // Show login form
    public function showLoginForm()
    {
        try {
            return view('layouts.auth.login');
        } catch (\Exception $e) {
            // Log or handle the exception
            return back()->withErrors(['error' => 'An error occurred while loading the login form.']);
        }
    }

    // Forgot password form
    public function forgot()
    {
        try {
            return view('layouts.auth.forgot');
        } catch (\Exception $e) {
            // Log or handle the exception
            return back()->withErrors(['error' => 'An error occurred while loading the forgot password form.']);
        }
    }

    // Handle login form submission
    public function login(Request $request)
    {
        try {
            // Validate form input
            $request->validate([
                'email_or_mobile' => 'required|string|max:255',
                'password' => 'required|string|min:8',
            ], [
                'email_or_mobile.required' => 'Please enter your email or mobile number.',
                'password.required' => 'Please enter your password.',
            ]);

            // Attempt to log in the student
            $credentials = $request->only('email_or_mobile', 'password');
            $field = filter_var($credentials['email_or_mobile'], FILTER_VALIDATE_EMAIL) ? 'email' : 'phone';

            // Check if the user exists and if the password is correct
            if (($user = Student::where($field, $credentials['email_or_mobile'])->first()) &&
                Auth::guard('student')->attempt([$field => $user->$field, 'password' => $credentials['password']], $request->remember)
            ) {
                // If successful, redirect to intended location
                return redirect()->route('/');
            }

            // If unsuccessful, redirect back to the login with error message
            return redirect()->back()->withInput($request->only('email_or_mobile', 'remember'))->withErrors([
                'email_or_mobile' => 'These credentials do not match our records.',
            ]);
        } catch (\Exception $e) {
            // Log or handle the exception
            return back()->withErrors(['error' => 'An error occurred while logging in.']);
        }
    }

    // Show list of students (for admin)
    public function studentList()
    {
        try {
            $students = Student::all();
            $studentDetails = StudentDetail::all();
            return view('student.list', compact('students', 'studentDetails'));
        } catch (\Exception $e) {
            // Log or handle the exception
            return back()->withErrors(['error' => 'An error occurred while fetching student list.']);
        }
    }

    // View student details
    public function studentDetails($id)
    {
        try {
            // Retrieve the student details based on the provided ID
            $studentDetail = StudentDetail::where('student_id', $id)->first();

            // Check if the student details exist
            if (!$studentDetail) {
                abort(404); // Or handle the case where the student details are not found
            }

            // Pass the student details to the view
            return view('student.view', compact('studentDetail'));
        } catch (\Exception $e) {
            // Log or handle the exception
            return back()->withErrors(['error' => 'An error occurred while fetching student details.']);
        }
    }

    // View student profile
    public function studentProfile($id)
    {
        try {
            $studentProfile = StudentDetail::where('student_id', $id)->first();

            // Check if the student details exist
            if (!$studentProfile) {
                abort(404);
            }

            return view('student.profile', compact('studentProfile'));
        } catch (\Exception $e) {
            // Log or handle the exception
            return back()->withErrors(['error' => 'An error occurred while fetching student profile.']);
        }
    }

    // Student dashboard
    public function studentDashboard($id)
    {
        try {
            $studentDashboard = StudentDetail::where('student_id', $id)->first();
            $status = Status::all();
            $category = Category::where('status_id',1)->get();
            $chapter = Chapter::where('status_id',1)->get();

            // Check if the student details exist
            if (!$studentDashboard) {
                abort(404);
            }
            return view('student.dashboard', compact('studentDashboard','status','category','chapter'));
        } catch (\Exception $e) {
            // Log or handle the exception
            return back()->withErrors(['error' => 'An error occurred while fetching student details.']);
        }
    }

    // Send OTP (via email or SMS)
    private function sendOTP($recipient, $otp)
    {
        try {
            // Check if the recipient is an email
            if (filter_var($recipient, FILTER_VALIDATE_EMAIL)) {
                // Check if the email is already registered
                $userExists = Student::where('email', $recipient)->exists();
                if ($userExists) {
                    return false;
                }

                // Send OTP via email
                Mail::raw('Your OTP is: ' . $otp, function ($message) use ($recipient) {
                    $message->to($recipient)->subject('Your OTP');
                });
                $expire = 0;
                // Save the email OTP to the database
                Otp::create([
                    'recipient' => $recipient,
                    'otp' => $otp,
                ]);
                return true;
            } else {
                // Check if the phone number is already registered
                $userExists = Student::where('phone', $recipient)->exists();
                if ($userExists) {
                    // If user already exists with this phone number, return false
                    return false;
                }

                // Generate a dummy OTP for testing purposes (replace this with your actual SMS sending logic)
                $dummyOtp = '123456'; // Example dummy OTP
                // Save the dummy OTP to the database
                Otp::create([
                    'recipient' => $recipient,
                    'otp' => $dummyOtp,
                ]);
                return true;
            }
        } catch (\Exception $e) {
            // Log the error
            \Log::error('Error sending OTP: ' . $e->getMessage());
            return false;
        }
    }


    // Generate OTP and return JSON response
    public function generateOtp(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'email_or_phone' => 'required|string|max:255',
            ]);

            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()->first()], 422);
            }

            $otp = $this->generateRandomOTP();

            if (!$this->sendOTP($request->email_or_phone, $otp)) {
                return response()->json(['error' => 'Failed to send OTP'], 500);
            }

            return response()->json(['message' => 'OTP sent successfully'], 200);
        } catch (\Exception $e) {
            // Log or handle the exception
            return response()->json(['error' => 'An error occurred while generating OTP'], 500);
        }
    }

    // Verify OTP and return JSON response
    public function verifyOtp(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'otp' => 'required|string|max:6', // Assuming OTP is a 6-digit string
            ]);

            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()->first()], 422);
            }

            $otp = $request->otp;

            // Check if the latest OTP exists in the database where expire = 0
            $otpRecord = Otp::where('otp', $otp)
                ->where('expire', 0)
                ->latest() // Get the latest record first
                ->first();

            if (!$otpRecord) {
                // Check if the OTP exists but has expired
                $expiredOtp = Otp::where('otp', $otp)
                    ->where('expire', 1)
                    ->first();

                if ($expiredOtp) {
                    return response()->json(['error' => 'OTP has expired. Please resend OTP.'], 422);
                } else {
                    return response()->json(['error' => 'Invalid OTP'], 422);
                }
            }

            // OTP is valid, you can perform additional actions here if needed
            return response()->json(['message' => 'OTP verified successfully'], 200);
        } catch (\Exception $e) {
            // Log or handle the exception
            return response()->json(['error' => 'An error occurred while verifying OTP'], 500);
        }
    }


    // Generate a random OTP
    private function generateRandomOTP($length = 6)
    {
        return str_pad(mt_rand(0, pow(10, $length) - 1), $length, '0', STR_PAD_LEFT);
    }

    public function updateExpireColumn(Request $request)
    {
        $emailOrPhone = $request->input('email_or_phone');

        // Find the OTP record by email or phone number where expire = 0
        $otp = Otp::where('recipient', $emailOrPhone)
            ->where('expire', 0)
            ->first();

        if ($otp) {
            // Update the 'expire' column to 1
            $otp->update(['expire' => 1]);
            return response()->json(['message' => 'Expire column updated successfully'], 200);
        } else {
            // If OTP with provided recipient and expire = 0 is not found, update all records with the same recipient and expire = 0 to 1
            Otp::where('recipient', $emailOrPhone)
                ->where('expire', 0)
                ->update(['expire' => 1]);
            return response()->json(['message' => 'Expire column updated successfully for all related records'], 200);
        }
    }

  
    public function store_student(Request $request)
    {
        // Get the authenticated user
        $user = Auth::user();

        // Concatenate first name and last name
        $fullname = $request->firstname . ' ' . $request->lastname;

        // Update the associated student detail
        $user->studentDetail->update([
            'fullname' => $fullname,
            'gender' => $request->gender,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'state' => $request->state,
            'city' => $request->city,
            'college_name' => $request->college_name,
            'year' => $request->year,
            'branch' => $request->branch,
            'area_of_interest' => $request->area_of_interest,
            'cgpa' => $request->cgpa,
        ]);

        // Optionally, you can redirect the user after successful submission
        return redirect()->route('/')->with('success', 'Student details updated successfully.');
        // return response()->json(['success' => true, 'message' => 'Student details updated successfully.']);
    }
    // public function payment(Request $request){
    //     if(!empty($request->razorpay_payment_id)){
    //         $api = new Api(env('rzp_test_ci8sxj5IUpXRv1'), env('LWdNlyPjctgEHhDrUDnVy7cD'));
    //         try{
    //             $payment = $api->payment->fetch($request->razorpay_payment_id);
    //             $response = $payment->capture(['amount'=> $payment['amount']]);
    //         dd($response);  
    //         }
    //         catch(\Exception $ex)
    //         {
    //             return $ex->getMessage();
    //        }    
    //     }
    // }

    public function payment(Request $request)
    {

        dd($request);
                die();
                
        if (!empty($request->razorpay_payment_id)) {
            $api = new Api('rzp_test_ci8sxj5IUpXRv1', 'LWdNlyPjctgEHhDrUDnVy7cD');

            try {
                $payment = $api->payment->fetch($request->razorpay_payment_id);
                $response = $payment->capture(['amount' => $payment['amount']]);
                
                // Update the Payment_table with payment details
                $user = Auth::user();
                $user->payments()->create([
                    'payment_id' => $payment->id,
                    'payment_name' => $user->studentDetail->fullname,
                    'quantity' => 1, // You may adjust this as per your requirement
                    'amount' => $payment->amount,
                    'currency' => $payment->currency,
                    'customer_name' => $user->name,
                    'customer_email' => $user->email,
                    'payment_status' => 'success', // Assuming payment is successful
                    'payment_method' => 'razorpay',
                ]);

                // Optionally, you can return a success message
                return response()->json(['success' => true, 'message' => 'Payment details updated successfully.']);
            } catch (\Exception $ex) {
                // Handle any exceptions
                return response()->json(['success' => false, 'error' => $ex->getMessage()]);
            }
        }
    }
}

