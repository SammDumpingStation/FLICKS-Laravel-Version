<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingSeat extends Model
{
    use HasFactory;
    protected $fillable = [
        'booking_id',
        'seat_id',
        'seat_status_id',
        'cinema_id'
    ];
    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
    public function seat()
    {
        return $this->belongsTo(Seat::class);
    }
    public function seatStatus()
    {
        return $this->belongsTo(SeatStatus::class);
    }
    public function cinema()
    {
        return $this->belongsTo(Cinema::class);
    }
}
