<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class NormalController extends Controller
{
    public function index()
    {
        return view('layouts.index');
    }

    public function registrationPage()
    {
        return view('student.registration');
    }

}
