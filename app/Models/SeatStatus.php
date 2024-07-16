<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeatStatus extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'status',
    ];
    public function bookingSeat()
    {
        return $this->hasMany(BookingSeat::class);
    }
}
