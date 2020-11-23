<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function show_about()
    {
        $test_var = 'test var';
        $names = ['ehsan','morteza',100];
        return view('aboutme.index',[
            'var' => $test_var,
            'arry_name' => $names
        ]);
    }

    public function show_contact()
    {
        return view('aboutme.contact');
    }
}
