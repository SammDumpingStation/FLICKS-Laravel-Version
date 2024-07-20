<?php

namespace App\Helpers;

function getSeatNames($payment)
{
    if (!$payment || $payment === null) {
        return null;
    } else {
        $seatArray = $payment->booking->bookingSeat->pluck('seat.name')->toArray();
        $seats = implode(', ', $seatArray);
        return $seats;
    }

}
