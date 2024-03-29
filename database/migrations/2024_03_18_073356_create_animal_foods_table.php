<?php

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
        Schema::create('animal_foods', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('animal_id');
            $table->unsignedBigInteger('food_id');
            $table->foreign('animal_id')->references('id')->on('animals')->onDelete('cascade');
            $table->foreign('food_id')->references('id')->on('food')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animal_food');
    }
};
