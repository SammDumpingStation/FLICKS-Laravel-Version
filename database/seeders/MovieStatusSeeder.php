<?php

namespace Database\Seeders;

use App\Models\MovieStatus;
use Illuminate\Database\Seeder;

class MovieStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $name = [
                'now-showing',
                'next-picture',
                'coming-soon',
                'upcoming',
                'stashed',
            ];
        foreach ($name as $index) {
            MovieStatus::create([
                'name' => $index
            ]);
        }
    }
}
