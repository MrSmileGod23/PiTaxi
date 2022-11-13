<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusDriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status_drivers')->insert([
            [
                'name' => 'На линии',
            ],
            [
                'name' => 'Отдыхает',
            ],
            [
                'name' => 'Уволен',
            ],
        ]);
    }
}
