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
        $status = [
            [
                'name' => 'now-showing',
            ],
            [
                'name' => 'next-picture',
            ],
            [
                'name' => 'coming-soon',
            ],
            [
                'name' => 'upcoming',
            ],
            [
                'name' => 'stashed',
            ],
        ];
        foreach ($status as $index) {
            MovieStatus::create($index);
        }
    }
}
