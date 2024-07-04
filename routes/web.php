<?php

use Illuminate\Support\Facades\Route;

// Auth Route Files
Route::get('/auth', function () {
    return view('auth.index');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/', function () {
    return view('welcome');
});
