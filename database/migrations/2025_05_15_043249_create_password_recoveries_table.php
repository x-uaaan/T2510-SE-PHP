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
        Schema::create('password_recoveries', function (Blueprint $table) {
            $table->id('recoveryID');
            $table->string('alumniEmail')->unique();
            $table->string('password');
            $table->foreignId('alumniID')->constrained('alumnis')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('password_recoveries');
    }
};
