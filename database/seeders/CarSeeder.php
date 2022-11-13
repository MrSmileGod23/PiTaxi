<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert([
            [
                'vin' => 'XW7BN4FK30S112105',
                'regNumber' => 'С568РН174',
                'brand_id' => '2',
                'model' => 'Accord',
                'color' => 'Ярко-красный',
                'year' => '2020',
                'registration' => '6555 942512'
            ],
            [
                'vin' => 'XW7BN4FK30S112105',
                'regNumber' => 'К314ОМ174',
                'brand_id' => '3',
                'model' => 'Galaxy',
                'color' => 'Серо-чёрный',
                'year' => '2000',
                'registration' => '6437 550695'
            ]
        ]);
    }
}
