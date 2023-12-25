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
        Schema::create('guest', function (Blueprint $table) {
            $table->increments('G_ID');
            $table->string('G_FirstName')->nullable();
            $table->string('G_LastName')->nullable();
            $table->string('G_SDT')->nullable();
            $table->string('G_Email')->nullable();
            $table->string('G_CCCD')->nullable();
            $table->string('G_Password')->nullable();
            $table->string('G_Account')->nullable();
            $table->string('Status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guest');
    }
};
