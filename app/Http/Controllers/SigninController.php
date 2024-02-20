<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SigninController extends Controller
{
    public function index()
    {
        return view('layouts.sign-in', [
            'title' => 'sign-in',
            'active' => 'sign-in'
        ]);
    }
}
