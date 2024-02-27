<?php

namespace App\Http\Controllers;

// StudentController.php
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\StudentDetail;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
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
            return redirect()->intended('/');
        }

        // If unsuccessful, redirect back to the login with error message
        return redirect()->back()->withInput($request->only('email_or_mobile', 'remember'))->withErrors([
            'email_or_mobile' => 'These credentials do not match our records.',
        ]);
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
}
