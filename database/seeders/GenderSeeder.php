<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        DB::table('genders')->truncate();

        DB::table('genders')->insert([
            [   'id' => 1,
                'title' => 'Nam',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   'id' => 2,
                'title' => 'Nữ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [   'id' => 3,
                'title' => 'Cả nam và nữ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
