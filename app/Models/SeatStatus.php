<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeatStatus extends Model
{
    use HasFactory;
    protected $fillable = [
        'status',
    ];
    public function cinema()
    {
        return $this->belongsToMany(Cinema::class , table: "seat_availabilities");
    }
    public function seat()
    {
        return $this->belongsToMany(Seat::class, table: "seat_availabilities");
    }
}
