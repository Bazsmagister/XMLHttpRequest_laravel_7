<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        "name" => "admin",
        "email" => "admin@admin.com",
        "password" => bcrypt("adminadmin"),
        // "created_at" => "yesterday",

        ]);

        factory(User::class, 9)->create();
    }
}
