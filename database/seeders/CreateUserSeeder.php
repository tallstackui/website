<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class CreateUserSeeder extends Seeder
{
    public function run(): void
    {
        User::create(['name' => 'Taylor Otwell', 'email' => 'taylor@laravel.com', 'password' => bcrypt('password')]);
        User::create(['name' => 'Nuno Maduro', 'email' => 'nuno@laravel.com', 'password' => bcrypt('password')]);
        User::create(['name' => 'Dries Vints', 'email' => 'dries@laravel.com', 'password' => bcrypt('password')]);
        User::create(['name' => 'Jess Archer', 'email' => 'jess@laravel.com', 'password' => bcrypt('password')]);
        User::create(['name' => 'James Brooks', 'email' => 'james@laravel.com', 'password' => bcrypt('password')]);
        User::create(['name' => 'Mohamed Said', 'email' => 'mohamed@laravel.com', 'password' => bcrypt('password')]);
        User::create(['name' => 'Tim MacDonald', 'email' => 'tim@laravel.com', 'password' => bcrypt('password')]);
        User::create(['name' => 'Joe Dixon', 'email' => 'joe@laravel.com', 'password' => bcrypt('password')]);
        User::create(['name' => 'Mior Muhammad Zaki Mior Khairuddin', 'email' => 'mior@laravel.com', 'password' => bcrypt('password')]);
        User::create(['name' => 'Guus Leeuw', 'email' => 'guus@laravel.com', 'password' => bcrypt('password')]);
        User::create(['name' => 'Christoph Rumpel', 'email' => 'christoph@laravel.com', 'password' => bcrypt('password')]);
    }
}
