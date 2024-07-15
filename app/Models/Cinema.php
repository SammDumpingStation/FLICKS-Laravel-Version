<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'capacity',
        'ticket_cost',
        'movie_id',
    ];

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    public function timeSlot()
    {
        return $this->hasMany(TimeSlot::class);
    }

    public function seat()
    {
        return $this->belongsToMany(Seat::class, table: "seat_availabilities");
    }
    public function seatStatus()
    {
        return $this->belongsToMany(SeatStatus::class, table: "seat_availabilities");
    }
}

// Cinema::with(['seat' => function ($query) {
//     $query->select('id', 'status_id')->take(1); // Take only one seat record
// }, 'seatStatus'])->find(1);
