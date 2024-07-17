<?php

namespace Database\Seeders;

use App\Models\PaymentMethod;
use Illuminate\Database\Seeder;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = [
            'Over-the-Counter',
            'Gcash',
            'Credit Card',
            'Debit Card'
        ];
        foreach ($names as $name) {
            PaymentMethod::create([
                'name' => $name,
            ]);
        }

    }
}
