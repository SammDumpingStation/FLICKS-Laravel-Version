<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\MovieUserController;
use App\Http\Controllers\MovieAdminController;
use App\Http\Controllers\RegisteredUsersController;


Route::get('/login', [SessionController::class, 'create']);
Route::get('/auth', [SessionController::class, 'modeCreate']);
Route::post('/auth', [SessionController::class, 'mode']);
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);

Route::get('/check', [RegisteredUsersController::class, 'checkCreate']);
Route::post('/check', [RegisteredUsersController::class, 'check']);
Route::get('/register', [RegisteredUsersController::class, 'create']);
Route::post('/register', [RegisteredUsersController::class, 'store']);

Route::get('/', [MovieUserController::class, 'index']);
Route::get('/movies/{movie}', [MovieUserController::class, 'show']);

Route::get('/movies/{movie}/book', [TicketController::class, 'createBooking']);
Route::get('/movies/{movie}/seat', [TicketController::class, 'createSeats']);
Route::get('/movies/{movie}/booking/confirm', [TicketController::class, 'bookingConfirm']);
Route::get('/movies/{movie}/booking/success', [TicketController::class, 'bookingSuccess']);

Route::post('/movies/{movie}/book', [TicketController::class, 'storeBooking']);
Route::post('/movies/{movie}/seat', [TicketController::class, 'storeSeats']);
Route::post('/movies/{movie}/booking/confirm', [TicketController::class, 'storeTicket']);

//Admin
Route::get('/admin', [MovieAdminController::class, 'index']);
Route::get('movies/payment/{cinema}', [MovieAdminController::class, 'show']);
