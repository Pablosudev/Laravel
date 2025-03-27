<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ContactModel;

class ContactSeeder extends Seeder
{
    
    public function run(): void
    {
        \App\Models\ContactModel::factory(10)->create();
    }
}
