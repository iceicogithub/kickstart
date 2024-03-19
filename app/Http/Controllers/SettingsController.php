<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings;

class SettingsController extends Controller
{
    public function common()
    {
        return view('setting.common');
    }

    public function admin()
    {
        return view('setting.admin');
    }

    public function student()
    {
        return view('setting.student');
    }

    public function select()
    {
        return view('setting.commonsetting.changelogo');
    }

    public function change(Request $request)
    {
      $imageName = time().'.'.$request->image->extension();
      $request->image->move(public_path('logo'),$imageName);

    }
}



