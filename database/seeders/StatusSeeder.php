<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
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
            Status::create($index);
        }

    }
}
