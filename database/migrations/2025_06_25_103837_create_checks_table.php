<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('checks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('athlete_id')->constrained()->onDelete('cascade');

            $table->decimal('weight_kg', 5, 2);
            $table->tinyInteger('workouts_completed');
            $table->string('photo_front')->nullable();
            $table->string('photo_back')->nullable();
            $table->string('photo_side_left')->nullable();
            $table->string('photo_side_right')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checks');
    }
};
