<?php

use App\Models\Cinema;
use App\Models\Seat;
use App\Models\SeatStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('seat_availabilities', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Cinema::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Seat::class)->constrained()->cascadeOnDelete();;
            $table->foreignIdFor(SeatStatus::class)->constrained()->cascadeOnDelete();;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seat_availabilities');
    }
};
