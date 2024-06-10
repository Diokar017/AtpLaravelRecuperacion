<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

 public function run()
{
    // Crear un usuario administrador
    User::create([
        'name' => 'Admin',
        'email' => 'admin@example.com',
        'password' => Hash::make('password'),
        'role' => 'admin', // Asignar el rol de administrador
    ]);

    // Crear un usuario normal
    User::create([
        'name' => 'Usuario',
        'email' => 'usuario@example.com',
        'password' => Hash::make('password'),
        'role' => 'user', // Asignar el rol de usuario normal
    ]);
}
}
