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
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('E_ID');
            $table->string('E_FirstName')->nullable();
            $table->string('E_LastName')->nullable();
            $table->string('E_Designation')->nullable();
            $table->string('E_ContactNumber')->nullable();
            $table->string('E_Email')->nullable();
            $table->date('E_JoinDate')->nullable();
            $table->string('E_Address')->nullable();
            $table->unsignedBigInteger('DE_ID')->nullable(); // Khóa ngoại đến bảng khác (Department)
            $table->unsignedBigInteger('H_ID')->nullable();  // Khóa ngoại đến bảng khác (Hotel)
            $table->string('E_Username')->nullable();
            $table->string('E_Password')->nullable();
            $table->integer('Status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee');
    }
};
