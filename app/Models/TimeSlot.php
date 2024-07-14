<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeSlot extends Model
{
    use HasFactory;
    protected $fillable = [
        'cinema_id',
        'time_start',
        'time_end',
    ];
    
    public function cinema()
    {
        return $this->belongsTo(Movie::class);
    }


}
