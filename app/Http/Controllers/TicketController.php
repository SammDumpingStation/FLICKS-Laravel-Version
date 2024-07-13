<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Ticket;
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
    public function create(Movie $movie)
    {
        Session::put('ticket_selection', [
            'id' => $movie->id,
            'title' => $movie->title,
            'poster-link' => $movie->poster_link,
            'time-slot' => Session::get('ticket_selection.time-slot', null),
            'quantity' => Session::get('ticket_selection.quantity', null),
            'total-cost' => Session::get('ticket_selection.total-cost', null),
            'cinema-number' => $movie->id,
            'seats-selected' => Session::get('ticket_selection.seats-selected', null),
        ]);

        $ticketInfo = Session::get('ticket_selection');

        return view('customer.ticket.create.book', ['ticketInfo' => $ticketInfo]);
    }

    public function storeTicket(Request $request)
    {
        $validated = $request->validate([
            'time-slot' => 'required',
            'quantity' => 'required',
        ]);

        $totalCost = 400.00 * $validated['quantity'];
        $ticketInfo = Session::get('ticket_selection');
        $movieID = $ticketInfo['id'];

        Session::put('ticket_selection.time-slot', $validated['time-slot']);
        Session::put('ticket_selection.quantity', $validated['quantity']);
        Session::put('ticket_selection.total-cost', $totalCost);
        // Retrieve
        return redirect('/movies/' . $movieID . '/seat');
    }

    public function selectSeats()
    {
        $ticketInfo = Session::get('ticket_selection');

        return view('customer.ticket.create.seat', ['ticketInfo' => $ticketInfo]);
    }

    public function storeSeat()
    {
        $ticketInfo = Session::get('ticket_selection');
        $movieID = $ticketInfo['id'];
        Session::put('ticket_selection.seats-selected', ['a1', 'a2', 'a3', 'a4']);
        return redirect('/movies/' . $movieID . '/booking/confirm');
    }

    public function bookingConfirm()
    {
        $ticketInfo = Session::get('ticket_selection');
        $seatsArray = $ticketInfo['seats-selected'];
        $string = ucwords(implode(', ', $seatsArray));
        return view('customer.ticket.create.confirm', ['ticketInfo' => $ticketInfo, 'seatSelected' => $string]);
    }

    public function bookingSuccess()
    {

    }

    // $view = match ($type) {
//     'book' => 'customer.ticket.create.book',
//     'seat' => 'customer.ticket.create.seat',
//     'confirm' => 'customer.ticket.create.confirm',
//     'success' => 'customer.ticket.create.success',
//     default => abort(404), // or some default view
// };
// $selection = Session::get('ticket_selection');

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
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket)
    {
        //
    }
}
