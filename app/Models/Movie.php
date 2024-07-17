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
        'length',
        'rating_score',
        'dimension_id',
        'age_rating_id',
        'movie_status_id'
    ];

    public function status() {
        return $this->belongsTo(MovieStatus::class);
    }
    public function cinema() {
        return $this->hasOne(Cinema::class);
    }
    public function dimensions() {
        return $this->belongsToMany(Dimension::class);
    }
    public function ageRating() {
        return $this->belongsTo(AgeRating::class);
    }
}
