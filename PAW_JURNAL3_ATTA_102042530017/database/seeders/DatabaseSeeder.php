<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Akun Pengguna LMS (1 Dosen & 1 Mahasiswa)
        // TODO 1 : Buat akun awal untuk Dosen.
        // Hint:
        // - Gunakan email sebagai identitas akun.
        // - Lengkapi nama, password yang di-hash, role Dosen,dan nomor induk.
        
        User::updateOrCreate(
            ['email' => 'budisantoso@gmail.com'],
            [
                'name' => 'Dr. Ir. Budi Santoso, M.T.',
                'password' => Hash::make('1234'),
                'role' => 'dosen',
                'nomor_induk' => '123456789'
            ]
        );
        User::updateOrCreate(
            ['email' => 'attarahman@gmail.com'],
            [
                'name' => 'Atta R. Raihannan',
                'password' => Hash::make('1234'),
                'role' => 'mahasiswa',
                'nomor_induk' => '987654321'
            ]
        );    
    }

}
