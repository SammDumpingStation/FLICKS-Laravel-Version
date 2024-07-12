<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */

class MovieFactory extends Factory
{
    protected $model = Movie::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph,
            'poster_link' => $this->faker->imageUrl(640, 480, 'movies', true),
            'age_rating' => $this->faker->randomElement(['G', 'PG', 'PG-13', 'R', 'NC-17']),
            'display' => $this->faker->randomElement(['2D', '3D', '4D', 'IMAX', 'AVR', 'VR']),
            'length' => $this->faker->numberBetween(80, 180), // movie length in minutes
            'rating_score' => $this->faker->randomFloat(1, 1, 10), // movie rating between 1.0 and 10.0
        ];
    }
}

