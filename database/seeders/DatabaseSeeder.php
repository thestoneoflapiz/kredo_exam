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
            "email" => "my_one_user@email.com",
            "email_verified_at" => date("Y-m-d H:i:s"),
            "password" => bcrypt("12345678"),
            "name" => "First Doe",
        ]);

        User::create([
            "email" => "my_two_user@email.com",
            "email_verified_at" => date("Y-m-d H:i:s"),
            "password" => bcrypt("12345678"),
            "name" => "Second Doe",
        ]);

        User::create([
            "email" => "my_three_user@email.com",
            "email_verified_at" => date("Y-m-d H:i:s"),
            "password" => bcrypt("12345678"),
            "name" => "Third Doe",
        ]);

        User::create([
            "email" => "my_four_user@email.com",
            "email_verified_at" => date("Y-m-d H:i:s"),
            "password" => bcrypt("12345678"),
            "name" => "Fourth Doe",
        ]);
        
    }
}
