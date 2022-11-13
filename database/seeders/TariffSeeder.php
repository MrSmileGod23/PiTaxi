<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TariffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tariffs')->insert([
            [
                'name' => 'Эконом',
                'cost' => '65',
                'cost_mileage' => '8'
            ],
            [
                'name' => 'Комфорт',
                'cost' => '90',
                'cost_mileage' => '9'
            ],
            [
                'name' => 'Люкс',
                'cost' => '220',
                'cost_mileage' => '14'
            ],
        ]);
    }
}
