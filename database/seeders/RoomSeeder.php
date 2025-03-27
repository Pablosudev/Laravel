<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RoomsModel;

class RoomSeeder extends Seeder
{
    
    public function run(): void
    {
        \App\Models\RoomsModel::factory(10)->create();
    }
}
