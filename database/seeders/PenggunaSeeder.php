<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PenggunaSeeder extends Seeder
{
    public function run(): void
    {
        // Pastikan nama tabel adalah 'users' dan kolomnya adalah 'name'
        DB::table('users')->insert([
            [
                'name' => 'Arifin Ilham (Admin)', // Ganti 'nama' jadi 'name'
                'email' => 'atua345@gmail.com',
                'password' => Hash::make('hahaha'),
                'role' => 'admin', // Set role sebagai 'admin'
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Wulida Tsalis', // Ganti 'nama' jadi 'name'
                'email' => 'wulidacantik@gmail.com',
                'password' => Hash::make('hahaha'),
                'role'=> 'staff', // Set role sebagai 'staff'
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}