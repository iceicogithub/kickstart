<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logo;

class SettingController extends Controller
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
        $request->validate([
            'image' => 'nullable|mimes:png,jpg,jpeg'
        ]);

        if($request->has('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;
            $path = 'logo';
            $file->move($path,$filename);
        }

        Logo::create([
            'image' => $path.$filename
        ]);

        return redirect('setting/commonsetting/changelogo');

    }
}




        // if ($request->hasFile('image')) {
        //     $imagename = time() . '.' . $request->image->extension();
        //     $request->image->move(public_path('img'), $imagename);

        //     $logo = new Logo;
        //     $logo->image = $imagename;

        //     $logo->save();
        // }

        // return back();

