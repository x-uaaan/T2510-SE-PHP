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
        Schema::create('alumnis', function (Blueprint $table) {
            $table->id('alumniID');
            $table->string('alumniName');
            $table->string('alumniPassword');
            $table->string('alumniEmail')->unique();
            $table->string('alumniPhone');
            $table->string('alumniFaculty');
            $table->text('alumniResume')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnis');
    }
};
