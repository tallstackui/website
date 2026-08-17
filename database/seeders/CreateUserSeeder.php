<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class CreateUserSeeder extends Seeder
{
    public function run(): void
    {
        $password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; // password

        User::create(['name' => 'Alice Morgan', 'username' => 'alicemorgan', 'email' => 'alice@example.com', 'password' => $password]);
        User::create(['name' => 'Bruno Fernandes', 'username' => 'brunofernandes', 'email' => 'bruno@example.com', 'password' => $password]);
        User::create(['name' => 'Clara Dubois', 'username' => 'claradubois', 'email' => 'clara@example.com', 'password' => $password]);
        User::create(['name' => 'Daniel Kowalski', 'username' => 'danielkowalski', 'email' => 'daniel@example.com', 'password' => $password]);
        User::create(['name' => 'Elena Rossi', 'username' => 'elenarossi', 'email' => 'elena@example.com', 'password' => $password]);
        User::create(['name' => 'Felix Andersen', 'username' => 'felixandersen', 'email' => 'felix@example.com', 'password' => $password]);
        User::create(['name' => 'Grace Nakamura', 'username' => 'gracenakamura', 'email' => 'grace@example.com', 'password' => $password]);
        User::create(['name' => 'Hugo Martinez', 'username' => 'hugomartinez', 'email' => 'hugo@example.com', 'password' => $password]);
        User::create(['name' => 'Isla Petrov', 'username' => 'islapetrov', 'email' => 'isla@example.com', 'password' => $password]);
        User::create(['name' => 'Jonas Weber', 'username' => 'jonasweber', 'email' => 'jonas@example.com', 'password' => $password]);
        User::create(['name' => 'Kira Svensson', 'username' => 'kirasvensson', 'email' => 'kira@example.com', 'password' => $password]);
        User::create(['name' => 'Leo Chang', 'username' => 'leochang', 'email' => 'leo@example.com', 'password' => $password]);
        User::create(['name' => 'Maya Singh', 'username' => 'mayasingh', 'email' => 'maya@example.com', 'password' => $password]);
        User::create(['name' => 'Noah Fischer', 'username' => 'noahfischer', 'email' => 'noah@example.com', 'password' => $password]);
        User::create(['name' => 'Olivia Santos', 'username' => 'oliviasantos', 'email' => 'olivia@example.com', 'password' => $password]);
        User::create(['name' => 'Paul Müller', 'username' => 'paulmuller', 'email' => 'paul@example.com', 'password' => $password]);
        User::create(['name' => 'Quinn O\'Brien', 'username' => 'quinnobrien', 'email' => 'quinn@example.com', 'password' => $password]);
        User::create(['name' => 'Rosa Kim', 'username' => 'rosakim', 'email' => 'rosa@example.com', 'password' => $password]);
        User::create(['name' => 'Samuel Leclerc', 'username' => 'samuelleclerc', 'email' => 'samuel@example.com', 'password' => $password]);
        User::create(['name' => 'Tara Johansson', 'username' => 'tarajohansson', 'email' => 'tara@example.com', 'password' => $password]);
    }
}
