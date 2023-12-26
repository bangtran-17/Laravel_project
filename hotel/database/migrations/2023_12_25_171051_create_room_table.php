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
        Schema::create('room', function (Blueprint $table) {
            $table->id();

            $table->string('R_Number')->nullable();
            $table->unsignedBigInteger('RT_ID')->nullable();
            $table->foreign('RT_ID')->references('id')->on('roomtype')->onDelete('SET NULL')->nullable();
            $table->string('R_Available')->nullable();
            $table->string('Status')->nullable();

            $table->timestamps();
        });    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room');
    }
};
