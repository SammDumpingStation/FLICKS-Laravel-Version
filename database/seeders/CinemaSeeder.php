<?php

namespace Database\Seeders;

use App\Models\Cinema;
use Illuminate\Database\Seeder;

class CinemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $number = [
            'Cinema 1',
            'Cinema 2',
            'Cinema 3',
            'Cinema 4',
        ];

        $capacity = [
            '120',
            '120',
            '120',
            '120',
        ];

        $ticketCost = [
            '400',
            '300',
            '280',
            '340',
        ];

        $movieID = [
            1,
            2,
            3,
            4,
        ];
        foreach ($number as $key => $number) {
            Cinema::create([
                'number' => $number,
                'capacity' => $capacity[$key],
                'ticket_cost' => $ticketCost[$key],
                'movie_id' => $movieID[$key], // Ensure your array name matches
            ]);
        }
    }
}
