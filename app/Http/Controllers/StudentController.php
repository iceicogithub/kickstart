<?php

namespace App\Http\Controllers;

// StudentController.php
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\StudentDetail;
use Illuminate\Support\Facades\Validator;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Log;
use Razorpay\Api\Api;

class StudentController extends Controller
{

    public function googleLogin(){
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
    public function showRegistrationForm()
    {
        return view('layouts.auth.register');
    }

    public function register(Request $request)
    {
        // Validate the request
        $request->validate([
            'email_or_phone' => 'required|string|max:255|email_or_phone|unique:students,email|unique:students,phone',
            'password' => 'required|string|min:8|confirmed',
        ], [
            'email_or_phone' => 'The :attribute must be a valid.',
        ]);

        // Check if the input is an email or a phone number
        if (filter_var($request->email_or_phone, FILTER_VALIDATE_EMAIL)) {
            $email = $request->email_or_phone;
            $phone = null;
        } else {
            $email = null;
            $phone = preg_replace('/[^0-9]/', '', $request->email_or_phone);
        }

        // Create a new student
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

        // Redirect the user after registration
        return redirect()->route('student.login')->with('success', 'Registration successful. Please log in.');
    }

    public function logout()
    {
        Auth::guard('student')->logout();
        return redirect()->route('/')->with('success', 'Logged out successfully.');
    }


    public function showLoginForm()
    {
        return view('layouts.auth.login');
    }

    public function forgot()
    {
        return view('layouts.auth.forgot');
    }

    public function login(Request $request)
    {
        // Validate the request
        $request->validate([
            'email_or_mobile' => 'required|string|max:255',
            'password' => 'required|string|min:8',
        ], [
            'email_or_mobile.required' => 'Please enter your email or mobile number.',
            'password.required' => 'Please enter your password.',
        ]);

        // Attempt to log in the student
        $credentials = $request->only('email_or_mobile', 'password');

        // Attempt to find the user by email or phone
        $user = Student::where('email', $credentials['email_or_mobile'])
            ->orWhere('phone', $credentials['email_or_mobile'])
            ->first();

        // Check if the user exists and if the password is correct
        if ($user && Auth::guard('student')->attempt(['email' => $user->email, 'password' => $credentials['password']], $request->remember)) {
            // If successful, redirect to intended location
            return redirect()->route('/');
        }

        // // If unsuccessful, redirect back to the login with error message
        // return redirect()->back()->withInput($request->only('email_or_mobile', 'remember'))->withErrors([
        //     'email_or_mobile' => 'These credentials do not match our records.',
        // ]);
    }

    public function studentList()
    {
        $student = Student::all();
        $studentDetails = StudentDetail::all();
        return view('student.list', compact('student', 'studentDetails'));
    }

    public function studentDetails($id)
    {
        // Retrieve the student details based on the provided ID
        $studentDetail = StudentDetail::where('student_id', $id)->first();

        // Check if the student details exist
        if (!$studentDetail) {
            abort(404); // Or handle the case where the student details are not found
        }

        // Pass the student details to the view
        return view('student.view', compact('studentDetail'));
    }

    public function studentProfile($id)
    {
        $studentProfile = StudentDetail::where('student_id', $id)->first();

        // Check if the student details exist
        if (!$studentProfile) {
            abort(404);
        }

        return view('student.profile', compact('studentProfile'));
    }

    public function studentDashboard($id)
    {
        $studentDashboard = StudentDetail::where('student_id', $id)->first();

        // Check if the student details exist
        if (!$studentDashboard) {
            abort(404);
        }
        return view('student.dashboard', compact('studentDashboard'));
    }

    // public function studentRegister(Request $request){
    //     // dd($request);
    //     // die();
    //     $validate=Validator::make($request->all(),
    //     [
    //         'student_id'=> ['required','string','max:255'],
    //         'fullname'=> ['required','string','max:255'],
    //         'gender'=> ['required','string','max:255'],
    //         'email'=> ['required','string','max:255'],
    //         'phone'=> ['required','string','max:255'],
    //         'profession'=>['required','string','max:255'],
    //         'address'=> ['required','string','max:255'],
    //         'college_name'=> ['required','string','max:255'],
    //         'year'=> ['required','string','max:255'],
    //         'branch'=> ['required','string','max:255'],
    //         'area_of_interest'=> ['required','string','max:255'],
    //         'cgpa'=>['required','string','max:255'],
    //     ]);

    //     // If validation fails, redirect back with errors
    //     if ($validate->fails()) {
    //         return redirect()->back()->withErrors($validate)->withInput();
    //     }

    //     $Studetail = StudentDetail::create(
    //         [
    //             'gender'=>$request->gender,
    //             'address'=>$request->address,
    //             'college_name'=>$request->college_name,
    //             'year'=>$request->year,
    //             'branch'=>$request->branch,
    //             'area_of_interest'=>$request->area_of_interest,
    //             'cgpa'=>$request->cgpa
    //         ]);
    // }
    

    public function processPayment(Request $request)
    {
        dd($request);
        die();
        // Initialize Razorpay API with your key and secret
        $api = new Api('rzp_test_ci8sxj5IUpXRv1', 'LWdNlyPjctgEHhDrUDnVy7cD');
        
        // Fetch payment details from Razorpay
        $payment_id = $request->razorpay_payment_id;
        $payment = $api->payment->fetch($payment_id);

        // Verify the payment
        if ($payment->status == 'authorized' || $payment->status == 'captured') {
            // Payment successful, store student details in the database
            $this->store_student($request);

            // Return success response
            return response()->json(['message' => 'Payment successful. Student details saved.']);
        } else {
            // Payment failed, return error response
            return response()->json(['message' => 'Payment failed. Please try again.'], 400);
        }
    }
    

    public function store_student(Request $request)
{
    dd($request);
    die();
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
}

}
