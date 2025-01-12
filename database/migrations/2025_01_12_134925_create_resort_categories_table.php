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
        Schema::create('resort_categories', function (Blueprint $table) {
       
                $table->integer('id')->primary();
                $table->string('type', 100);
                $table->dateTime('updatedatetime');
                $table->integer('status');
                $table->integer('tbl_user_idtbl_user');
                $table->timestamps();
          
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resort_categories');
    }
};
