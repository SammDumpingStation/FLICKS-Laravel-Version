<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'booking_id',
        'payment_method_id',
        'payment_status_id',
        'cinema_id',
    ];
    public function booking() {
        return $this->belongsTo(Booking::class);
    }
    public function method() {
        return $this->belongsTo(PaymentMethod::class);
    }
    public function status() {
        return $this->belongsTo(PaymentStatus::class);
    }
}
