<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dimension extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable =[
        'name',
        'full_title'
    ];
    public function movies() {
        return $this->belongsToMany(Movie::class);
    }
}
