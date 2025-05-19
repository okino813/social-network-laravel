<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'administrateur',
            'image' => 'user.jpg',
            'password' => Hash::make('admin2024!'),
            'email' => 'admin@truc.fr',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'role_id' => 2

        ]);

        // Création d'un utilisateur de test
        User::create([
            'name' => 'utilisateur',
            'image' => 'user.jpg',
            'password' => Hash::make('user2024!'),
            'email' => 'user@truc.fr',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'role_id' => 1
        ]);
        // Création de 8 utilisateurs aléatoires
        User::factory(8)->create();
    }
}
