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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->integer('number')->unique();
            $table->integer('price');
            $table->integer('offer');
            $table->enum('roomStatus', ['Available', 'Booked']) -> default ('Available');
            $table->enum('type', ['Suite', 'Double Bed', 'Double Superior', 'Single Bed']);
            $table->enum('amenities', ['WIFI', 'AC', 'Shower', 'Pool', 'TV', 'Parking', 'GYM', 'Bar', 'Breakfast']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
