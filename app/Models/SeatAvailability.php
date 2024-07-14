<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeatAvailability extends Model
{
    use HasFactory;
    protected $fillable = [
        'cinema_id',
        'seat_id',
        'seat_status_id'
    ];
}
