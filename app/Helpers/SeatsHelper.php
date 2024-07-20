<?php

namespace App\Helpers;

use App\Models\Seat;

function getSeatNames($payment)
    {
        $seatArray = $payment->booking->bookingSeat->pluck('seat.name')->toArray();
        $seats = implode(', ', $seatArray);
        return $seats;
    }
