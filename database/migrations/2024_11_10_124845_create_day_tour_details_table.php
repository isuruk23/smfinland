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
        Schema::create('day_tour_details', function (Blueprint $table) {
            $table->id();
            $table->text('highlight');
            $table->text('itinerary');
            $table->text('includes');
            $table->text('conditions');
            $table->text('important');
            $table->bigInteger('tour_id');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('day_tour_details');
    }
};
