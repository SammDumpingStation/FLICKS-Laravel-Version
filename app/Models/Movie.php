<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'poster_link',
        'age_rating',
        'display',
        'length',
        'rating_score',
        'rating_score',
        'status_id'
    ];

    public function status() {
        return $this->belongsTo(Status::class);
    }
}
