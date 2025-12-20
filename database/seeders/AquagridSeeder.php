<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AquagridSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Membuat Akun Admin Utama
        User::updateOrCreate(
            ['email' => 'admin@aquagrid.com'], // Ganti dengan email Anda
            [
                'name' => 'Super Admin',
                'password' => Hash::make('password123'), // Laravel otomatis menghash-kan ini
                'role' => 'admin',
            ]
        );

        // 2. Anda bisa menambah user lain atau data kolam di sini nanti
    }
}