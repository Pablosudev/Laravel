<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\BookingsModel;
use App\Models\RoomsModel;


class BookingsFactory extends Factory
{
   
    protected $model = BookingsModel::class;
    public function definition(): array
    {
        return [
            'id' => $this->faker->unique()->randomNumber(), 
            'name' => $this->faker->name(), 
            'date' => $this->faker->date(), 
            'check_in' => $this->faker->dateTimeThisYear(), 
            'check_out' => $this->faker->dateTimeBetween('+1 day', '+7 days'), 
            'request' => $this->faker->sentence(), 
            'status' => $this->faker->randomElement(['Check In', 'Check Out', 'In progress']),
            'room_id' => Room::inRandomOrder()->first()->id, 
        ]
    }
}
