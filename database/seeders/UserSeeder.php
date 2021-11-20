<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        DB::table('users')->insert([
            'name'     => 'Admin',
            'email'    => 'admin@fpt.vn',
            'password' => bcrypt('admin999'),
            'is_admin' => 1,
        ]);
    }
}
