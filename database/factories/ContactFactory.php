<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ContactModel;


class ContactFactory extends Factory
{
    protected $model = ContactModel::class;


    public function definition(): array
    {
        'date' => $this->faker->date(),
        'name' => $this->faker->name(), 
        'email' => $this->faker->safeEmail(), 
        'phone' => $this->faker->phoneNumber(), 
        'subject' => $this->faker->word(), 
        'comment' => $this->faker->paragraph(), 
        'archived' => $this->faker->boolean(),
    }
}