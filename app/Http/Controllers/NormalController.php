<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use App\Models\StudentDetail;

class NormalController extends Controller
{
    public function index()
    {
        return view('layouts.index');
    }

    public function registrationPage()
    {
        $formData = StudentDetail::where('student_id', auth()->id())->first();

        $fullName = $formData->fullname ?? '';

    // Split the full name into first name and last name
    $nameParts = explode(' ', $fullName, 2);
    $firstName = $nameParts[0] ?? '';
    $lastName = $nameParts[1] ?? '';

    // dd($formData); // Debugging statement

    // Pass the fetched data to the view
    return view('student.registration', compact('formData','firstName', 'lastName'));
        // $formData = StudentDetail::all();
        // return view('student.registration',compact('formData'));
        // return view('student.registration');

    }
    
    public function question_answer()
    {
        return view('tests.question&answer');
    }
}

