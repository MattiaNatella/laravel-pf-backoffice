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
        Schema::create('athletes', function (Blueprint $table) {
            $table->id();

            $table->string('name', 100);
            $table->string('surname', 100);
            $table->string('email')->unique();
            $table->string('telephone', 20)->nullable();
            $table->text('notes')->nullable();
            $table->integer('height_cm')->nullable();
            $table->decimal('initial_weight', 5, 2)->nullable();

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('athletes');
    }
};
