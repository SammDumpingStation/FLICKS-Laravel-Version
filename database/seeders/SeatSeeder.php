<?php

namespace Database\Seeders;

use App\Models\Seat;
use Illuminate\Database\Seeder;

class SeatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 120; $i++) {
            $groupNumber = ceil($i / 10);
            $letter = chr(64 + $groupNumber);
            $label = $letter . $i;
            Seat::create([
                'name' => $label
            ]);
        }
    }
}
