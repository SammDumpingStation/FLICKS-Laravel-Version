<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'ticket_quantity',
        'total_cost',
        'time_selected',
        'user_id',
        'cinema_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function cinema()
    {
        return $this->belongsTo(Cinema::class);
    }
    public function bookingSeat()
    {
        return $this->hasMany(BookingSeat::class);
    }
}
