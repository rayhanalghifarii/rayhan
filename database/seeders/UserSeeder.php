<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // Pastikan mengimpor model User
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Membuat akun admin
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('adminpassword'), // Gantilah dengan password yang diinginkan
            'role' => 'admin', // Menetapkan role sebagai admin
        ]);

        // Jika ingin menambahkan user biasa
        User::create([
            'name' => 'User',
            'email' => 'user@example.com',
            'password' => bcrypt('password'), // Gantilah dengan password yang diinginkan
            'role' => 'user', // Menetapkan role sebagai user
        ]);
    }
}
