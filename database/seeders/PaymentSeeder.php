<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = [
            1,
            2,
            3,
            4
        ];
        $method = [
            1,
            1,
            1,
            1,
        ];
        $status = [
            1,
            2,
            3,
            1
        ];
        foreach ($names as $name => $value) {
            Payment::create([
                'booking_id' => $value,
                'payment_method_id' => $method[$name],
                'payment_status_id' => $status[$name]
            ]);
        }

    }
}
