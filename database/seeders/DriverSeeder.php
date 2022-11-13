<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drivers')->insert([
            [
                'FCs' => 'Якушов Егор Вячеславович',
                'passport' => '4392 228635',
                'experience' => '2',
                'phone' => '+7 (910) 235-76-31',
                'trips' => '544',
                'status_id' => '1',
                'car_id' => '1'
            ],

        ]);
    }
}
