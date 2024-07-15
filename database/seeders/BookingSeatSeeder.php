<?php

namespace Database\Seeders;

use App\Models\BookingSeat;
use Illuminate\Database\Seeder;

class BookingSeatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bookingID = [
            1,
            2,
            3,
        ];

        $seatID = [
            [10],
            [12, 13],
            [90, 91],
        ];

        $seatStatusID = [
            [4],
            [3, 3],
            [4, 4],
        ];

        $cinemaID = [
            [1],
            [2, 2],
            [2, 2],
        ];

        foreach ($bookingID as $key => $booking) {
            foreach ($seatID[$key] as $index => $seat) {
                BookingSeat::create([
                    'booking_id' => $booking,
                    'seat_id' => $seat,
                    'seat_status_id' => $seatStatusID[$key][$index],
                    'cinema_id' => $cinemaID[$key][$index],
                ]);
            }
        }
    }

}
