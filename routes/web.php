<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('main', [
        "title" => "Home"
    ]);
});

Route::get('/studio', function () {
    return view('layouts.studio', [
        "title" => "Studio"
    ]);
});

Route::get('/sign-in', function () {
    return view('layouts.sign-in', [
        "title" => "Sign-In"
    ]);
});

Route::get('/sign-up', function () {
    return view('layouts.sign-up', [
        "title" => "Sign-Up"
    ]);
});

Route::get('/profile', function () {
    return view('layouts.profile', [
        "title" => "Profile"
    ]);
});
