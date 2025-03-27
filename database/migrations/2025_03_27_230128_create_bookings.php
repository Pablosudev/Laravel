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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timetamps('date');
            $table->timetamps('Check In');
            $table->timetamps('Check Out');
            $table->string('request');
            $table->enum('status', ['Check In', 'Check Out', 'In Progress'])->default('In Progress');
            $table->unsignedBigInteger('room_id');  // Especificamos el tipo de dato correcto (unsignedBigInteger)
            $table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
