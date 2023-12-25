<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('department', function (Blueprint $table) {
            $table->id(); // Tự động tạo cột id là primary key và tự động tăng
            $table->string('DE_Name', 50)->nullable();
            $table->text('DE_Description')->nullable()->nullable();
            $table->integer('DE_InitialSalary')->nullable();
            $table->string('Status', 50)->nullable();
            // Các trường khác nếu có

            $table->timestamps(); // Tự động tạo cột created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('department');
    }
};
