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
        Schema::create('payment', function (Blueprint $table) {
            $table->id();

            $table->string('P_Status', 50)->nullable();
            $table->string('P_Type', 50)->nullable();
            $table->dateTime('PaidDate')->nullable();
            $table->decimal('P_Amount', 18, 2)->nullable();
            $table->foreignId('B_ID')->nullable()->constrained('booking', 'id');
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
        Schema::dropIfExists('payment');
    }
};
