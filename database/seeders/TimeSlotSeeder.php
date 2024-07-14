<?php

namespace Database\Seeders;

use App\Models\TimeSlot;
use Illuminate\Database\Seeder;

class TimeSlotSeeder extends Seeder
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
        $time_start = [
            ['12:30', '3:30', '5:30'],
            ['12:30', '3:45', '6:00'],
            ['12:30', '3:15', '5:45'],
            ['12:30', '4:00', '6:30'],
        ];

        $time_end = [
            ['3:00', '5:00', '7:00'],
            ['3:15', '5:15', '7:30'],
            ['2:45', '5:00', '7:15'],
            ['3:00', '5:30', '8:00'],

        ];
        foreach ($cinema_id as $key => $id) {
            // Loop through each set of time slots
            foreach ($time_start[$key] as $index => $start) {
                $end = $time_end[$key][$index];

                // Create TimeSlot using $id, $start, and $end
                TimeSlot::create([
                    'cinema_id' => $id,
                    'time_start' => $start,
                    'time_end' => $end,
                ]);
            }
        }

    }
}
