<?php

use App\Http\Controllers\CinemaController;
use App\Http\Controllers\MovieAdminController;
use App\Http\Controllers\MovieUserController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RegisteredUsersController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TicketAdminController;
use App\Http\Controllers\TicketUserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/movies/{movie}/book', [TicketUserController::class, 'createBooking']);
Route::get('/movies/{movie}/seat', [TicketUserController::class, 'createSeats']);
Route::get('/movies/{movie}/booking/confirm', [TicketUserController::class, 'bookingConfirm']);
Route::get('/movies/{movie}/booking/success', [TicketUserController::class, 'bookingSuccess']);

Route::post('/movies/{movie}/book', [TicketUserController::class, 'storeBooking']);
Route::post('/movies/{movie}/seat', [TicketUserController::class, 'storeSeats']);
Route::post('/movies/{movie}/booking/confirm', [TicketUserController::class, 'storeTicket']);

//Admin
Route::get('/admin', [TicketAdminController::class, 'index']);
Route::get('/admin/payment/{cinema}', [TicketAdminController::class, 'show']);

Route::get('/admin/create-movie', [MovieAdminController::class, 'create']);
Route::get('/admin/all-movies', [MovieAdminController::class, 'index']);
Route::get('/admin/cinema-assignment', [CinemaController::class, 'updateCinemaAssignment']);
Route::get('/admin/update-status', [CinemaController::class, 'updateStatus']);

Route::get('/admin/paid-history', [PaymentController::class, 'index']);
Route::get('/admin/create-user', [RegisteredUsersController::class, 'createAdmin']);
Route::get('/admin/register-index', [RegisteredUsersController::class, 'index']);
Route::get('/admin/admin-index', [RegisteredUsersController::class, 'indexAdmin']);
