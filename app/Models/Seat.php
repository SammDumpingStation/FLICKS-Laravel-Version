<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];
    public function cinema()
    {
        return $this->belongsToMany(Cinema::class , table: "seat_availabilities");
    }
    public function seatStatus()
    {
        return $this->belongsToMany(SeatStatus::class, table: "seat_availabilities");
    }
}
