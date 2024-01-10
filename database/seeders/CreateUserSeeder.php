<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class CreateUserSeeder extends Seeder
{
    public function run(): void
    {
        User::create(['name' => 'Taylor Otwell', 'username' => 'taylorotwell', 'email' => 'taylor@laravel.com', 'password' => bcrypt('password')]);
        User::create(['name' => 'Nuno Maduro', 'username' => 'nunomaduro', 'email' => 'nuno@laravel.com', 'password' => bcrypt('password')]);
        User::create(['name' => 'Dries Vints', 'username' => 'jbrooksuk', 'email' => 'dries@laravel.com', 'password' => bcrypt('password')]);
        User::create(['name' => 'Jess Archer', 'username' => 'jessarcher', 'email' => 'jess@laravel.com', 'password' => bcrypt('password')]);
        User::create(['name' => 'James Brooks', 'username' => 'jbrooksuk', 'email' => 'james@laravel.com', 'password' => bcrypt('password')]);
        User::create(['name' => 'Mohamed Said', 'username' => 'themsaid', 'email' => 'mohamed@laravel.com', 'password' => bcrypt('password')]);
        User::create(['name' => 'Tim MacDonald', 'username' => 'timacdonald', 'email' => 'tim@laravel.com', 'password' => bcrypt('password')]);
        User::create(['name' => 'Joe Dixon', 'username' => 'joedixon', 'email' => 'joe@laravel.com', 'password' => bcrypt('password')]);
        User::create(['name' => 'Mior Muhammad Zaki Mior Khairuddin', 'username' => 'crynobone', 'email' => 'mior@laravel.com', 'password' => bcrypt('password')]);
        User::create(['name' => 'Guus Leeuw', 'username' => 'phpguus', 'email' => 'guus@laravel.com', 'password' => bcrypt('password')]);
        User::create(['name' => 'Christoph Rumpel', 'username' => 'christophrumpel', 'email' => 'christoph@laravel.com', 'password' => bcrypt('password')]);
    }
}
