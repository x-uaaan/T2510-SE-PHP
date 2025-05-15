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
        Schema::create('events', function (Blueprint $table) {
            $table->id('eventID');
            $table->string('eventName');
            $table->text('eventDesc');
            $table->date('eventDate');
            $table->time('eventTime');
            $table->string('eventVenue');
            $table->foreignId('adminID')->constrained('admins')->cascadeOnDelete();
            $table->foreignId('alumniID')->constrained('alumnis')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
