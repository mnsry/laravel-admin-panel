<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $test = 'this is test';
        return view('user.index', [
            'test' => $test
        ]);
    }

}
