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
        Schema::create('booking', function (Blueprint $table) {
            $table->id();

            $table->date('B_DATE')->nullable();
            $table->integer('B_StayDuration')->nullable();
            $table->date('B_CheckingDate')->nullable();
            $table->date('B_CheckoutDate')->nullable();
            $table->decimal('B_Amount', 18, 2)->nullable();
            $table->foreignId('E_ID')->nullable()->constrained('employee', 'E_ID');
            $table->foreignId('G_ID')->nullable()->constrained('guest', 'G_ID');
            $table->foreignId('D_ID')->nullable()->constrained('discount', 'D_ID');
            $table->string('B_Status', 50)->nullable();
            $table->foreignId('Rid')->nullable()->constrained('room', 'id');
            $table->decimal('B_Cost', 18, 2)->nullable();
            // Thêm các trường khác nếu có

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking');
    }
};
