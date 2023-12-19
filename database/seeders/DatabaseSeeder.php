<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Factories\DoctorSeederFactory;

class DatabaseSeeder extends Seeder
{
   
    public function run(): void
    {
        // \App\Models\docterData::factory(30)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(DeppartmentSeeder::class);
        $this->call(DoctorSeeder::class);
        // DoctorSeederFactory::new()->count(30)->create();

    }
}
