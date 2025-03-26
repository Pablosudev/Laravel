<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\RoomsModel;

class RoomtFactory extends Factory
{

    protected $model = RoomsModel::class;
    public function definition(): array
    {
        return [
            'number' => $this->faker->unique()->randomNumber(3), 
            'price' => $this->faker->randomFloat(100, 200, 500), 
            'offer' => $this->faker->boolean(), 
            'roomStatus' => $this->faker->randomElement(['Available', 'Booked']), 
            'type' => $this->faker->randomElement(['Single-bed', 'Double-bed', 'Suite', 'Double Superior']), 
            'amenities' => $this->faker->words(7, true), 
        ];
    }
}
