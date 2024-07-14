<?php

namespace Database\Seeders;

use App\Models\SeatStatus;
use Illuminate\Database\Seeder;

class SeatStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $status = [
            [
                'status' => 'available',
            ],
            [
                'status' => 'not-available',
            ],
            [
                'status' => 'reserved',
            ],
            [
                'status' => 'paid',
            ],
        ];
        foreach ($status as $index) {
            SeatStatus::create($index);
        }

    }
}
