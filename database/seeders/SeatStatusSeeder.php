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
        $name = [

                'available',
                'not-available',
                'reserved',
                'paid',
            ]
        ;
        foreach ($name as $index) {
            SeatStatus::create([
                'name' => $index
            ]);
        }

    }
}
