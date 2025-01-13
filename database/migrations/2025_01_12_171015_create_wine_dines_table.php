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
        Schema::create('wine_dines', function (Blueprint $table) {
            $table->id();
            $table->text('discription');
            $table->string('image', 255);
            $table->integer('resort_id');
            $table->integer('status');
            $table->dateTime('updatedatetime');
            $table->integer('tbl_user_idtbl_user');
            $table->string('title', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wine_dines');
    }
};
