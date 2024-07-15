<?php

namespace Database\Seeders;

use App\Models\Booking;
use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $quantity = [
            '1',
            '2',
            '2',
        ];

        $totalCost = [
            '400',
            '600',
            '600',

        ];

        $timeSelected = [
            '12:30',
            '12:30',
            '12:30',
        ];

        $userID = [
            1,
            1,
            2,
        ];
        $cinemaID = [
            1,
            2,
            2,
        ];

        foreach ($quantity as $key => $index) {
            Booking::create([
                'ticket_quantity' => $index,
                'total_cost' => $totalCost[$key],
                'time_selected' => $timeSelected[$key],
                'user_id' => $userID[$key], // Ensure your array name matches
                'cinema_id' => $cinemaID[$key], // Ensure your array name matches

            ]);
        }
    }
}
