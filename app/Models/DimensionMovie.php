<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DimensionMovie extends Model
{
    use HasFactory;
    protected $table = 'dimension_movie';
    protected $fillable = [
        'movie_id',
        'dimension_id'
    ];
}
