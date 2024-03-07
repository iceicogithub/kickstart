<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\ForgotPasswordMail;
use App\Models\Student;
use App\Models\Otp;
use Illuminate\Support\Str;


class ForgotPasswordController  extends Controller
{
    public function checkUserExistence(Request $request)
    {
        $emailOrPhone = $request->email_or_phone;
        $user = Student::where('email', $emailOrPhone)
            ->orWhere('phone', $emailOrPhone)
            ->first();
        if ($user) {
            // User exists, send email or phone verification
            // Your email or SMS sending logic here
            return response()->json(['status' => 'success', 'message' => 'Please check your email or phone for password reset instructions.']);
        } else {
            // User doesn't exist
            return response()->json(['status' => 'error', 'message' => 'User does not exist.']);
        }
    }
    public function sendForgotPasswordEmail(Request $request)
    {
        try {
            $emailOrPhone = $request->email_or_phone;
            $user = Student::where('email', $emailOrPhone)
                ->orWhere('phone', $emailOrPhone)
                ->first();

            if ($user) {
                // Generate a unique token for the reset password link
                $token = Str::random(60);

                // Store the token in the user's record in the database
                $user->reset_password_token = $token;
                $user->save();

                // Send email with reset password link
                Mail::to($user->email)->send(new ForgotPasswordMail($user));

                return response()->json(['status' => 'success', 'message' => 'Password reset instructions sent to your email.']);
            } else {
                return response()->json(['status' => 'error', 'message' => 'User does not exist.']);
            }
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    public function showResetPasswordForm($token)
    {
        try {
            $user = Student::where('reset_password_token', $token)->first();

            if (!$user) {
                abort(404); // Or redirect to a different page with an error message
            }

            return view('otp.reset_password_form', ['token' => $token]); // Pass $token to the view as an array
        } catch (\Exception $e) {
            // Log or handle the exception as needed
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }
}
