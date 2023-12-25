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

            $table->string('R_Number', 50)->nullable();
            $table->foreignId('RT_ID')->nullable()->constrained('roomtype', 'id');
            $table->string('R_Available', 10)->nullable();
            $table->string('Status', 50)->nullable();
            // Thêm các trường khác nếu có

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room');
    }
};
