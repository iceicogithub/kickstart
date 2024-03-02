<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Models\Student; // Assuming your student model is named Student
use App\Models\Otp;

class ForgotPasswordController extends Controller
{
    public function checkEmailOrPhone(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'email_or_phone' => 'required|string|max:255',
            ]);

            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()->first()], 422);
            }

            $emailOrPhone = $request->email_or_phone;

            // Check if the email or phone exists in the database
            $userExistsWithEmail = Student::where('email', $emailOrPhone)->exists();
            $userExistsWithPhone = Student::where('phone', $emailOrPhone)->exists();

            if ($userExistsWithEmail || $userExistsWithPhone) {
                // User exists, proceed to send OTP
                return response()->json(['message' => 'User exists. OTP will be sent.'], 200);
            } else {
                // User does not exist
                return response()->json(['error' => 'No account found with the provided email or phone number.'], 404);
            }
        } catch (\Exception $e) {
            // Log or handle the exception
            return response()->json(['error' => 'An error occurred while checking email or phone.'], 500);
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

            // Check if OTP exists in the database
            $otpRecord = Otp::where('otp', $otp)->first();

            if (!$otpRecord) {
                return response()->json(['error' => 'Invalid OTP'], 422);
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

    // Send OTP (email or dummy for phone)
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
}
