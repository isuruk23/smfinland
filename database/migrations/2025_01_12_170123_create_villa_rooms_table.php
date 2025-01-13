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
        Schema::create('villa_rooms', function (Blueprint $table) {
            $table->id();
            $table->string('type', 20);
            $table->string('name', 255);
            $table->text('description');
            $table->integer('roomsize');
            $table->integer('bed');
            $table->string('view', 100);
            $table->integer('wifi');
            $table->integer('ac');
            $table->integer('barthroom');
            $table->string('image', 255);
            $table->integer('resort_id');
            $table->integer('status');
            $table->dateTime('updateddatetime');
            $table->integer('user_userid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('villa_rooms');
    }
};
