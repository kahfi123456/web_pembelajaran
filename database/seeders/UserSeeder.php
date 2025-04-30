<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Hapus admin lama jika ada
        User::where('email', 'admin@gmail.com')->delete();

        // Buat admin baru
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
        $admin->assignRole('admin');

        // Hapus mahasiswa lama jika ada
        User::where('email', 'mahasiswa@gmail.com')->delete();

        // Buat mahasiswa baru
        $mahasiswa = User::create([
            'name' => 'mahasiswa',
            'email' => 'mahasiswa@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
        $mahasiswa->assignRole('mahasiswa');


          $mahasiswa = User::create([
            'name' => 'wahyu',
            'email' => 'wahyu@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
        $mahasiswa->assignRole('mahasiswa');
    }
}