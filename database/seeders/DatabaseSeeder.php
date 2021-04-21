<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{ User };

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

        User::create([
            "email" => "myemail@user.com",
            "email_verified_at" => date("Y-m-d H:i:s"),
            "password" => bcrypt("myuser123$$"),
            "name" => "John Doe",
        ]);
    }
}
