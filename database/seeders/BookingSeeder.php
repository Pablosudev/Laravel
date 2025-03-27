<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BookingsModel;

class BookingSeeder extends Seeder
{
    
    public function run(): void
    {
       \App\Models\BookingsModel::factory(10)->create();
    }
}
