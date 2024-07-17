<?php

namespace Database\Seeders;

use App\Models\MovieDimension;
use Illuminate\Database\Seeder;

class MovieDimensionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movies = [
            1,
            2,
            3,
            4,
            5,
            6,
            7,
            8,
            9,
            10,
            11,
            12,
        ];
        $dimension = [
            [1, 4, 6],
            [1, 4, 6],
            [1, 2, 3, 4, 5, 6],
            [1, 4, 6],
            [1, 4, 6],
            [1, 4, 6],
            [1, 4, 6],
            [1, 4, 6],
            [1, 4, 6],
            [1, 4, 6],
            [1, 4, 6],
            [1, 4, 6],
        ];
        foreach ($movies as $key => $movie) {
            foreach ($dimension[$key] as $value) {
                MovieDimension::create([
                'movie_id' => $movie,
                'dimension_id' => $value,
            ]);
            }

        }
    }
}
