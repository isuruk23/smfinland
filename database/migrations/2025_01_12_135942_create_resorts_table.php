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
        Schema::create('resorts', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('type');
            $table->string('resort', 255);
            $table->integer('category');
            $table->integer('offer');
            $table->integer('offertype');
            $table->integer('resorttype');
            $table->integer('rates');
            $table->integer('price');
            $table->text('keyword');
            $table->string('resort_alias', 255);
            $table->string('summery', 255);
            $table->text('discription');
            $table->text('offer_discription', 255);
            $table->text('villa_discription', 255);
            $table->text('restaurants_discription', 255);
            $table->text('experiences_discription', 255);
            $table->text('imap');
            $table->string('address', 255);
            $table->integer('country');
            $table->string('image', 100);
            $table->string('bannerimage', 255);
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
        Schema::dropIfExists('resorts');
    }
};
