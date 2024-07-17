<?php

namespace Database\Seeders;

use App\Models\PaymentStatus;
use Illuminate\Database\Seeder;

class PaymentStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = [
            'Paid',
            'Pending',
            'Overdue'
        ];
        foreach ($names as $name) {
            PaymentStatus::create([
                'name' => $name,
            ]);
        }

    }
}
