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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->integer('resort');
            $table->string('title', 255);
            $table->text('keyword');
            $table->string('summery', 255);
            $table->text('discription');
            $table->integer('offer_type');
            $table->integer('meal_type');
            $table->string('image', 100);
            $table->integer('status');
            $table->dateTime('updateddatetime');
            $table->integer('tbl_user_idtbl_user');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};
