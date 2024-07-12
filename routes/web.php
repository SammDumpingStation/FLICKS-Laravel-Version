<?php

use App\Models\Movie;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisteredUsersController;
use App\Http\Controllers\TicketController;

//Note to Self: Follow this naming convention in creating routes:
// index: Display a listing of the resource. -> Ex. All Movie
// create: Show the form for creating a new resource. -> Ex. Login Movie
// store: Store a newly created resource in storage. -> Ex. Specific Movie
// show: Display the specified resource. -> Ex. Specific Movie
// edit: Show the form for editing the specified resource. -> Ex. Edit Movie
// update: Update the specified resource in storage.
// destroy: Remove the specified resource from storage.

// Auth Route Files
//POST requests for authentication

//Log-in user
//Log-in Form Page
Route::get('/login', [SessionController::class, 'create']);
//Mode Select -> Page where user selects what type of user they are.
Route::get('/auth', [SessionController::class, 'modeCreate']);
//Mode -> Selects if user wants to Log-in or as Guest
Route::post('/auth', [SessionController::class, 'mode']);
//Log-in -> Create a session for user
Route::post('/login', [SessionController::class, 'store']);
//Log-out -> Destroy the current session
Route::post('/logout', [SessionController::class, 'destroy']);

//Register User
Route::get('/check', [RegisteredUsersController::class, 'checkCreate']);
//Checks the user if he has a membership card to qualify
Route::post('/check', [RegisteredUsersController::class, 'check']);
//Checks the user if he is already a member of FLICKS
Route::get('/register', [RegisteredUsersController::class, 'create']);
//Register Page -> Register Page for the user
Route::post('/register', [RegisteredUsersController::class, 'store']);

//Home Page -> User
//Flicks Main Page
Route::get('/', [MovieController::class, 'index']);

//Individual Movie
Route::get('/movies/{movie}', [MovieController::class, 'show']);

//Create or Book a ticket
//Whole create resource split into 4 forms
Route::get('/create/{movie}', [TicketController::class, 'create']);
Route::get('/create/seat/{movie}', [TicketController::class, 'createSeat']);
Route::get('/create/confirm/{movie}', [TicketController::class, 'createConfirm']);
Route::get('/create/success/{movie}', [TicketController::class, 'createSuccess']);

//Home Page -> Admin
