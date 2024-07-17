<?php

namespace Database\Seeders;

use App\Models\AgeRating;
use Illuminate\Database\Seeder;

class AgeRatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = [
            'G',
            'PG',
            'PG-13',
            'R',
            'NC-17',
        ];
        $fullTitles = [
            'General Audiences',
            'Parental Guidance Suggested',
            'Parents Strongly Cautioned',
            'Restricted',
            'Adults Only',
        ];
        foreach ($names as $index => $name) {
            AgeRating::create([
                'name' => $name,
                'full_title' => $fullTitles[$index],
            ]);
        }

    }
}
