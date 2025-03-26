<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // ✅ Faltaba esto
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@hexagt.com',
            'password' => Hash::make('password123'),
            'role' => 'admin',
        ]);
    }
}
