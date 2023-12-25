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
        Schema::create('roomtype', function (Blueprint $table) {
            $table->id();

            $table->text('RT_DES')->nullable();
            $table->string('RT_NAME', 50)->nullable();
            $table->decimal('RT_Cost', 18, 2)->nullable();
            $table->string('RT_SmokeFriendly', 10)->nullable();
            $table->string('Status', 50)->nullable();
            $table->decimal('R_Area', 18, 2)->nullable();
            $table->text('RtDes1')->nullable();
            // Thêm các trường khác nếu có
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roomtype');
    }
};
