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
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->string('documents', 255);
            $table->string('file_path', 255);
            $table->string('g_drive_path', 255);
            $table->integer('resort_id');
            $table->text('document_type'); // Changed from varchar(4500) to text for better compatibility
            $table->integer('status');
            $table->dateTime('updatedatetime');
            $table->integer('tbl_user_idtbl_user');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
