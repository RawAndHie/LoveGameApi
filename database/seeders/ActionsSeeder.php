<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ActionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('actions')->truncate();

        DB::table('actions')->insert([
            [
                'id' => 1,
                'category_id' => 1,
                'gender_id' => 3,
                'content' => 'player.getName1() + ",hãy cắn vào tai" + player.getName2()',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'category_id' => 1,
                'gender_id' => 3,
                'content' => 'player.getName1() + ",hãy hôn" + player.getName2(), "trong 15 giây"',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
