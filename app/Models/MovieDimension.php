<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieDimension extends Model
{
    use HasFactory;
    protected $fillable = [
        'movie_id',
        'dimension_id'
    ];
}
