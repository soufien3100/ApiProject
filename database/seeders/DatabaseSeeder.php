<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\DriverSeeder;
use Database\Seeders\CircuitSeeder;
use Database\Seeders\ConstructorSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            DriverSeeder::class,
            CircuitSeeder::class,
            ConstructorSeeder::class,
            RaceSeeder::class,
            ResultSeeder::class
        ]);
    } 
}
