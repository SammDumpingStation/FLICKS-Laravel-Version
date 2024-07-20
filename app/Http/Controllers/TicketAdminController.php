<?php

namespace App\Http\Controllers;

use App\Models\Cinema;
use Illuminate\Http\Request;

class TicketAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cinema = Cinema::with('movie', 'payments')->get();
        return view('admin.movie.index', ['cinemas' => $cinema]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Cinema $cinema)
    {

        $cinemaPayment = $cinema->payments()
            ->where('payment_status_id', 2)
            ->with(['booking' => function ($query) {
                $query->with([
                    'user:id,first_name,last_name',
                    'bookingSeat',
                    'bookingSeat.seat',
                ]);
            }])
            ->get();

        // 2 is the "Pending" Status
        $available = $cinema->capacity - $cinemaPayment->count();
        return view('admin.movie.show', ['payments' => $cinemaPayment, 'available' => $available]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cinema $cinema)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cinema $cinema)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cinema $cinema)
    {
        //
    }
}
