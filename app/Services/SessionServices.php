<?php

namespace App\Services;

use App\Models\Booking;
use App\Models\BookingSeat;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class SessionServices
{
    public function storeTicketSession($movie)
    {
        Session::put('ticket_info', [
            'id' => $movie->id,
            'title' => $movie->title,
            'poster-link' => $movie->poster_link,
            'time-slot' => Session::get('ticket_selection.time-slot', null),
            'quantity' => Session::get('ticket_selection.quantity', null),
            'total-cost' => Session::get('ticket_selection.total-cost', null),
            'cinema-number' => $movie->cinema->number,
            'seats-selected' => Session::get('ticket_selection.seats-selected', null),
            'ticket-cost' => $movie->cinema->ticket_cost,
        ]);
    }

    public function getTicketSession()
    {
        return Session::get('ticket_info');
    }

    public function sessionToUser($validated)
    {
        $user = User::firstOrCreate(['email' => $validated['email']], // Attributes to check for existence
            [
                'first_name' => $validated['first-name'],
                'last_name' => $validated['last-name'],
                'email' => $validated['email'],
                'phone_number' => $validated['phone-number'],
                'registered' => false,
                'admin' => false,
            ]
        );
        return $user;
    }

    public function sessionToBooking($ticketSession, $newUserId)
    {
        return Booking::create([
            'ticket_quantity' => $ticketSession['quantity'],
            'total_cost' => $ticketSession['total-cost'],
            'time_selected' => $ticketSession['time-slot'],
            'user_id' => $newUserId,
            'cinema_id' => $ticketSession['cinema-number'],
        ]);
    }

    public function sessionToSeat($ticketSession, $seatArray, $newBookingID)
    {
        foreach ($seatArray as $index) {
            BookingSeat::create([
                'booking_id' => $newBookingID,
                'seat_id' => $index,
                'seat_status_id' => 3,
                'cinema_id' => $ticketSession['cinema-number'],
            ]);
        }
    }
    public function sessionToPayment($newBookingID)
    {
        Payment::create([
            'booking_id' => $newBookingID,
            'payment_method_id' => 1,
            'payment_status_id' => 2,
            'cinema_id' => 3
        ]);

    }
}
