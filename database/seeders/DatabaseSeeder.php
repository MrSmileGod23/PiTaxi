<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BrandSeeder::class);
        $this->call(TariffSeeder::class);
        $this->call(CarSeeder::class);
        $this->call(StatusDriverSeeder::class);
        $this->call(DriverSeeder::class);
        $this->call(TripSeeder::class);
    }
}
