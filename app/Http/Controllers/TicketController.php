<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\BookingSeat;
use App\Models\Cinema;
use App\Models\Movie;
use App\Models\Seat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createBooking(Movie $movie)
    {

        $cinemaID = Movie::with('cinema')->find($movie->id)->cinema->number;
        $ticketCost = Movie::with('cinema')->find($movie->id)->cinema->ticket_cost;
        $timeSlots = Cinema::find($cinemaID)->timeSlot->pluck('time_start');
        Session::put('ticket_selection', [
            'id' => $movie->id,
            'title' => $movie->title,
            'poster-link' => $movie->poster_link,
            'time-slot' => Session::get('ticket_selection.time-slot', null),
            'quantity' => Session::get('ticket_selection.quantity', null),
            'total-cost' => Session::get('ticket_selection.total-cost', null),
            'cinema-number' => $cinemaID,
            'seats-selected' => Session::get('ticket_selection.seats-selected', null),
            'ticket-cost' => $ticketCost,
        ]);

        $ticketInfo = Session::get('ticket_selection');

        return view('customer.ticket.create.book', ['ticketInfo' => $ticketInfo, 'timeSlots' => $timeSlots]);
    }

    public function storeBooking(Request $request)
    {
        $validated = $request->validate([
            'time-slot' => 'required',
            'quantity' => 'required',
        ]);

        $totalCost = Session::get('ticket_selection.ticket-cost') * $validated['quantity'] + 40;
        $ticketInfo = Session::get('ticket_selection');
        $movieID = $ticketInfo['id'];

        Session::put('ticket_selection.time-slot', $validated['time-slot']);
        Session::put('ticket_selection.quantity', $validated['quantity']);
        Session::put('ticket_selection.total-cost', $totalCost);
        // Retrieve
        return redirect('/movies/' . $movieID . '/seat');
    }

    public function createSeats()
    {
        $ticketInfo = Session::get('ticket_selection');
        $seats = Seat::all();

        return view('customer.ticket.create.seat', ['ticketInfo' => $ticketInfo, 'seats' => $seats]);
    }

    public function storeSeats()
    {
        $ticketInfo = Session::get('ticket_selection');
        $movieID = $ticketInfo['id'];
        $seatSelected = ['1', '2', '3', '4'];
        Session::put('ticket_selection.seats-selected', $seatSelected);
        return redirect('/movies/' . $movieID . '/booking/confirm');
    }

    public function bookingConfirm()
    {
        $ticketInfo = Session::get('ticket_selection');
        $seatsArray = $ticketInfo['seats-selected'];
        $seatNames = Seat::whereIn('id', $seatsArray)->pluck('name')->toArray();
        $string = ucwords(implode(', ', $seatNames));
        return view('customer.ticket.create.confirm', ['ticketInfo' => $ticketInfo, 'seatSelected' => $string]);
    }

    public function storeTicket(Request $request)
    {
        //validate
        $validated = $request->validate([
            'first-name' => ['required', 'min:5', 'string', 'max:255'],
            'last-name' => ['required', 'min:5', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone-number' => ['required', 'string', 'min:10'],
        ]);
        //Store User -> name, email, number, registered admin
        $newUser = User::create([
            'first_name' => $validated['first-name'],
            'last_name' => $validated['last-name'],
            'email' => $validated['email'],
            'phone_number' => $validated['phone-number'],
            'registered' => false,
            'admin' => false,
        ]);

        //get new user id
        $newUserId = $newUser->id;

        //Store Booking from session -> ticket_quantity, total_cost, time_selected, user_id, cinema_id
        $ticketInfo = Session::get('ticket_selection');
        $newBooking = Booking::create([
            'ticket_quantity' => $ticketInfo['quantity'],
            'total_cost' => $ticketInfo['total-cost'],
            'time_selected' => $ticketInfo['time-slot'],
            'user_id' => $newUserId,
            'cinema_id' => $ticketInfo['cinema-number'],
        ]);

        $newBookingID = $newBooking->id;

        //Store Seats Selected -> booking_id, seat_id, seat_status, cinema_id
        $seatArray = $ticketInfo['seats-selected'];
        foreach ($seatArray as $index) {
            BookingSeat::create([
                'booking_id' => $newBookingID,
                'seat_id' => $index,
                'seat_status_id' => 3,
                'cinema_id' => $ticketInfo['cinema-number'],
            ]);
        }
        return redirect('/movies/' . $ticketInfo['id'] . '/booking/success');
    }

    public function bookingSuccess()
    {
        $ticketInfo = Session::get('ticket_selection');
        return view('customer.ticket.create.success', ['ticketInfo' => $ticketInfo]);
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
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        //
    }
}
