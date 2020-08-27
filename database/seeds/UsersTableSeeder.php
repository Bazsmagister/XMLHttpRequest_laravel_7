<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
        "name" =>"admin",
        "email" => "admin@admin.com",
        "password" => bcrypt("adminadmin"),
        // "created_at" => "yesterday",

        ]);

        factory(\App\User::class, 91)->create();
    }
}
