<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class CreateUserSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create(['name' => 'Taylor Otwell']);
        User::factory()->create(['name' => 'Nuno Maduro']);
        User::factory()->create(['name' => 'Dries Vints']);
        User::factory()->create(['name' => 'Jess Archer']);
        User::factory()->create(['name' => 'James Brooks']);
        User::factory()->create(['name' => 'Mohamed Said']);
        User::factory()->create(['name' => 'Tim MacDonald']);
        User::factory()->create(['name' => 'Joe Dixon']);
        User::factory()->create(['name' => 'Mior Muhammad Zaki Mior Khairuddin']);
        User::factory()->create(['name' => 'Guus Leeuw']);
        User::factory()->create(['name' => 'Christoph Rumpel']);
    }
}
