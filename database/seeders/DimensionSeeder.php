<?php

namespace Database\Seeders;

use App\Models\Dimension;
use Illuminate\Database\Seeder;

class DimensionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = [
            '2D',
            '3D',
            '4D',
            'IMAX',
            'VR',
            'HDR'
        ];
        $fullTitles = [
            'Two Dimensional',
            'Three Dimensional',
            'Image Maximum',
            'Virtual Reality',
            'High Dynamic Range'
        ];
        foreach ($names as $index => $name) {
            Dimension::create([
                'name' => $name,
                'full_title' => $fullTitles[$index],
            ]);
        }

    }
}
