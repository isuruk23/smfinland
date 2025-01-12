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
        Schema::create('multi_day_tours', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slogan')->nullable(); // Short tagline or slogan for the tour
            $table->string('slug')->unique(); // URL-friendly identifier
            $table->text('summary')->nullable(); // Brief summary of the tour
            $table->text('description');
            $table->integer('days')->default(1); // Number of days
            $table->integer('nights')->default(0); // Number of nights
            $table->decimal('price', 10, 2); // Tour price
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->text('itinerary');
            $table->text('includes');
            $table->text('excludes');
            $table->text('conditions');
            $table->text('important');
            $table->text('tips');
            $table->string('image')->nullable(); // Image path for the tour
            $table->string('banner_image')->nullable(); // Image path for the tour
            $table->boolean('is_active')->default(true); // Availability status
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('multi_day_tours');
    }
};
