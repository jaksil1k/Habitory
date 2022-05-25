<?php

namespace Database\Seeders;

use App\Models\AdminUser;
use App\Models\Habit;
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
         \App\Models\User::factory(10)->create();
           Habit::factory(10)->create();

         AdminUser::factory(1)->create([
             "name" => "Admin",
             "email" => "laravel@laravel.com",
             "password" => bcrypt("123456"),
         ]);
    }
}
