<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Seat;
use App\Services\SessionServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TicketController extends Controller
{
    protected $sessionServices;

    public function __construct(SessionServices $sessionServices)
    {
        $this->sessionServices = $sessionServices;
    }

    protected function getTicket()
    {
        return $this->sessionServices->getTicketSession();
    }
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
        (new SessionServices)->storeTicketSession($movie);
        $timeSlots = $movie->cinema->timeSlot->pluck('time_start');
        $ticketSession = $this->getTicket();
        return view('customer.ticket.create.book', ['ticket' => $ticketSession, 'timeSlot' => $timeSlots]);
    }

    public function storeBooking(Request $request)
    {
        $validated = $request->validate([
            'time-slot' => 'required',
            'quantity' => 'required',
        ]);
        $ticketSession = $this->getTicket();
        $totalCost = $ticketSession['ticket-cost'] * $validated['quantity'] + 40;
        $movieID = $ticketSession['id'];

        // Update the ticket_info session data
        $ticketSession['time-slot'] = $validated['time-slot'];
        $ticketSession['quantity'] = $validated['quantity'];
        $ticketSession['total-cost'] = $totalCost;

        // Store the updated ticket_info back in the session
        Session::put('ticket_info', $ticketSession);
        return redirect('/movies/' . $movieID . '/seat');
    }

    public function createSeats()
    {
        $ticketSession = $this->getTicket();
        $seats = Seat::all();

        return view('customer.ticket.create.seat', ['ticket' => $ticketSession, 'seats' => $seats]);
    }

    public function storeSeats()
    {
        $ticketSession = $this->getTicket();
        $movieID = $ticketSession['id'];
        $seatSelected = ['1', '2', '3', '4'];
        $ticketSession['seats-selected'] = $seatSelected;
        // Store the updated ticket_info back in the session
        Session::put('ticket_info', $ticketSession);

        return redirect('/movies/' . $movieID . '/booking/confirm');
    }

    public function bookingConfirm()
    {
        $ticketSession = $this->getTicket();
        $seatsArray = $ticketSession['seats-selected'];
        $seatNames = Seat::whereIn('id', $seatsArray)->pluck('name')->toArray();
        $string = ucwords(implode(', ', $seatNames));
        return view('customer.ticket.create.confirm', ['ticket' => $ticketSession, 'seatSelected' => $string]);
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
        $ticketSession = $this->getTicket();
        //Store User
        $newUser = (new SessionServices)->sessionToUser($validated);
        //get new user id
        $newUserId = $newUser->id;
        //Store Booking from session
        $newBooking = (new SessionServices)->sessionToBooking($ticketSession, $newUserId);
        $newBookingID = $newBooking->id;
        //Store Seats Selected
        $seatArray = $ticketSession['seats-selected'];
        (new SessionServices)->sessionToSeat($ticketSession, $seatArray, $newBookingID);

        return redirect('/movies/' . $ticketSession['id'] . '/booking/success');
    }

    public function bookingSuccess()
    {
        $ticketSession = $this->getTicket();
        return view('customer.ticket.create.success', ['ticketInfo' => $ticketSession]);
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
