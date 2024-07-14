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
                'status' => 'now-showing',
            ],
            [
                'status' => 'next-picture',
            ],
            [
                'status' => 'coming-soon',
            ],
            [
                'status' => 'upcoming',
            ],
            [
                'status' => 'stashed',
            ],
        ];
        foreach ($status as $index) {
            MovieStatus::create($index);
        }
    }
}
