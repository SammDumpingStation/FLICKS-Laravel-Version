<?php

namespace App\Helpers;

function getSeatNames($payment)
    {
        $seatArray = $payment->booking->bookingSeat->pluck('seat.name')->toArray();
        $seats = implode(', ', $seatArray);
        return $seats;
    }
