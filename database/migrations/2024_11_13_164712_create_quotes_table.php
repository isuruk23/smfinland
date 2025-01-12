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
        Schema::create('quotes', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->string('name'); // Name of the contact
            $table->date('arrival'); // Date of the contact
            $table->date('departure'); // Date of the contact
            $table->string('country'); // Country of the contact
            $table->string('nationality'); // Country of the contact
            $table->integer('night')->nullable(); // Number of nights
            $table->integer('adult')->nullable(); // Number of adults
            $table->integer('child')->nullable(); // Number of children
            $table->integer('infant')->nullable(); // Number of children
            $table->string('contactno'); // Contact number
            $table->string('email'); // Email address (must be unique)
            $table->integer('tourid');
            $table->string('tourtype');
            $table->boolean('is_active')->default(false);
            $table->timestamps(); // Timestamps for created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotes');
    }
};
