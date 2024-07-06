<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Note to Self: Follow this naming convention in creating routes:
// index: Display a listing of the resource. -> Ex. All Movie
// create: Show the form for creating a new resource. -> Ex. Login Movie
// store: Store a newly created resource in storage. -> Ex. Specific Movie
// show: Display the specified resource. -> Ex. Specific Movie
// edit: Show the form for editing the specified resource. -> Ex. Edit Movie
// update: Update the specified resource in storage.
// destroy: Remove the specified resource from storage.

// Auth Route Files
//Select Page -> Selects what type of user  is entering the site
Route::view('/auth', 'auth.index');

//Log-in page -> Login Page for the user
Route::view('/login', 'auth.login');

//Register Page -> Register Page for the user
Route::view('/register', 'auth.register');

//Check Membership ID Page
Route::view('/check-id', 'auth.check-id');

//Home Page -> User
//Flicks Main Page
Route::get('/', function () {
    return view('welcome');
});

Route::post('/auth', function (Request $request) {
    $select = $request->input('option');
    if (!$select) {
        return redirect('/auth');
    } elseif ($select === 'user') {
        return redirect('/login');
    } else {
        return redirect('/');
    }
});

//Checks the user if he is already a member of FLICKS
Route::post('/check', function () {
    return redirect('/register');
});
//Home Page -> Admin
