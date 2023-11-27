<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class CreateUserSeeder extends Seeder
{
    public function run(): void
    {
        User::create(['name' => 'Test User', 'email' => 'test@example.com', 'password' => bcrypt('password')]);

        User::factory(10)->create();
    }
}
