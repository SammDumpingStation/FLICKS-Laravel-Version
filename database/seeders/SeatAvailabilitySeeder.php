<?php

namespace Database\Seeders;

use App\Models\SeatAvailability;
use Illuminate\Database\Seeder;

class SeatAvailabilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cinema_id = [
            1,
            2,
            3,
            4,
        ];

        foreach ($cinema_id as $id) {
            for ($i = 1; $i <= 120; $i++) {
                SeatAvailability::create([
                    'cinema_id' => $id,
                    'seat_id' => $i,
                    'seat_status_id' => rand(1, 4)
                ]);
            }
        }

    }
}
