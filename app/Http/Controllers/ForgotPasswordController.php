<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\ForgotPasswordMail;
use App\Models\Student;
use App\Models\Otp;
use Illuminate\Support\Str;


class ForgotPasswordController extends Controller
{
    public function checkUserExistence(Request $request)
    {
        try {
            $emailOrPhone = $request->email_or_phone;
            $user = Student::where('email', $emailOrPhone)
                ->orWhere('phone', $emailOrPhone)
                ->first();

            if ($user) {
                // Simulate sending email by returning reset password link
                $token = Str::random(60);
                $user->reset_password_token = $token;
                $user->save();

                return response()->json(['status' => 'success', 'message' => 'Reset password link generated.', 'reset_link' => url('/reset-password/' . $token)]);
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

            return view('reset_password_form')->with('token', $token);
        } catch (\Exception $e) {
            // Log or handle the exception as needed
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }
}
