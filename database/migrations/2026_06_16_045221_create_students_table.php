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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->enum('gender', ['Male', 'Female']);
            $table->string('phone', 20)->nullable();
            $table->string('email', 50)->unique();
            $table->tinyText('district');
            $table->string('subject', 50)->nullable();
            $table->string('photo', 100);
            $table->timestamps();
        });

    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
