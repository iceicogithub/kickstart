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
        $formData = StudentDetail::all();
        return view('student.registration',compact('formData'));
        // return view('student.registration');

    }
    
    public function question_answer()
    {
        return view('tests.question&answer');
    }
}

