<?php

use App\Models\AgeRating;
use App\Models\Dimension;
use App\Models\MovieStatus;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('poster_link');
            $table->integer('length');
            $table->integer('rating_score');
            $table->foreignIdFor(Dimension::class);
            $table->foreignIdFor(AgeRating::class);
            $table->foreignIdFor(MovieStatus::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
