<?php

namespace Database\Seeders;

use Backpack\CRUD\Tests\Config\Database\Seeds\UsersTableSeeder;
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
        // \App\Models\User::factory(10)->create();
//        $this->call(UserSeeder::class);
//        $this->call(GenderSeeder::class);
//        $this->call(CategorySeeder::class);
//        $this->call(ActionsSeeder::class);
        $this->call(UserSeederLocal::class);
        $this->call(GenderSeederLocal::class);
        $this->call(CategorySeederLocal::class);
        $this->call(ActionsSeederLocal::class);
    }
}
