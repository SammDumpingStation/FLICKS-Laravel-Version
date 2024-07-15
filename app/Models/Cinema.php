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
    public function booking()
    {
        return $this->hasMany(Booking::class);
    }
    public function bookingSeat()
    {
        return $this->hasMany(BookingSeat::class);
    }
}
