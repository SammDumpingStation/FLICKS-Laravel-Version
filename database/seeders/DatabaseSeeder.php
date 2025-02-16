<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Cinema;
use App\Models\PaymentStatus;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            MovieSeeder::class,
            MovieStatusSeeder::class,
            CinemaSeeder::class,
            TimeSlotSeeder::class,
            SeatSeeder::class,
            SeatStatusSeeder::class,
            AgeRatingSeeder::class,
            DimensionSeeder::class,
            PaymentSeeder::class,
            PaymentMethodSeeder::class,
            PaymentStatusSeeder::class,
            BookingSeeder::class,
            BookingSeatSeeder::class,
            DimensionMovieSeeder::class
            // Add more seeders as needed
        ]);

    }
}
