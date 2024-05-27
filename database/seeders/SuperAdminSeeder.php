<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminbaak = User::create([
            'name' => 'admin baak',
            'email' => 'adminbaak@roles.id',
            'password' => Hash::make('12345'),
        ]);
        $adminbaak->assignRole('adminbaak');

        $adminkeuangan = User::create([
            'name' => 'adminkeuangan',
            'email' => 'adminkeuangan@roles.id',
            'password' => Hash::make('12345'),
        ]);
        $adminkeuangan->assignRole('adminkeuangan');

        $mahasiswa = User::create([
            'name' => 'mahasiswa',
            'email' => 'mahasiswa@roles.id',
            'password' => Hash::make('12345'),
        ]);
        $mahasiswa->assignRole('mahasiswa');

    }
}