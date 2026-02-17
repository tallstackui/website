<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class CreateUserSeeder extends Seeder
{
    public function run(): void
    {
        User::create(['name' => 'Alice Morgan', 'username' => 'alicemorgan', 'email' => 'alice@example.com', 'password' => bcrypt('password')]);
        User::create(['name' => 'Bruno Fernandes', 'username' => 'brunofernandes', 'email' => 'bruno@example.com', 'password' => bcrypt('password')]);
        User::create(['name' => 'Clara Dubois', 'username' => 'claradubois', 'email' => 'clara@example.com', 'password' => bcrypt('password')]);
        User::create(['name' => 'Daniel Kowalski', 'username' => 'danielkowalski', 'email' => 'daniel@example.com', 'password' => bcrypt('password')]);
        User::create(['name' => 'Elena Rossi', 'username' => 'elenarossi', 'email' => 'elena@example.com', 'password' => bcrypt('password')]);
        User::create(['name' => 'Felix Andersen', 'username' => 'felixandersen', 'email' => 'felix@example.com', 'password' => bcrypt('password')]);
        User::create(['name' => 'Grace Nakamura', 'username' => 'gracenakamura', 'email' => 'grace@example.com', 'password' => bcrypt('password')]);
        User::create(['name' => 'Hugo Martinez', 'username' => 'hugomartinez', 'email' => 'hugo@example.com', 'password' => bcrypt('password')]);
        User::create(['name' => 'Isla Petrov', 'username' => 'islapetrov', 'email' => 'isla@example.com', 'password' => bcrypt('password')]);
        User::create(['name' => 'Jonas Weber', 'username' => 'jonasweber', 'email' => 'jonas@example.com', 'password' => bcrypt('password')]);
        User::create(['name' => 'Kira Svensson', 'username' => 'kirasvensson', 'email' => 'kira@example.com', 'password' => bcrypt('password')]);
        User::create(['name' => 'Leo Chang', 'username' => 'leochang', 'email' => 'leo@example.com', 'password' => bcrypt('password')]);
        User::create(['name' => 'Maya Singh', 'username' => 'mayasingh', 'email' => 'maya@example.com', 'password' => bcrypt('password')]);
        User::create(['name' => 'Noah Fischer', 'username' => 'noahfischer', 'email' => 'noah@example.com', 'password' => bcrypt('password')]);
        User::create(['name' => 'Olivia Santos', 'username' => 'oliviasantos', 'email' => 'olivia@example.com', 'password' => bcrypt('password')]);
        User::create(['name' => 'Paul Müller', 'username' => 'paulmuller', 'email' => 'paul@example.com', 'password' => bcrypt('password')]);
        User::create(['name' => 'Quinn O\'Brien', 'username' => 'quinnobrien', 'email' => 'quinn@example.com', 'password' => bcrypt('password')]);
        User::create(['name' => 'Rosa Kim', 'username' => 'rosakim', 'email' => 'rosa@example.com', 'password' => bcrypt('password')]);
        User::create(['name' => 'Samuel Leclerc', 'username' => 'samuelleclerc', 'email' => 'samuel@example.com', 'password' => bcrypt('password')]);
        User::create(['name' => 'Tara Johansson', 'username' => 'tarajohansson', 'email' => 'tara@example.com', 'password' => bcrypt('password')]);
    }
}
