<?php

namespace Database\Seeders;

use App\Models\Tier;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'DEMA UNIDA Kelas A',
            'username' => 'demasiman',
            'email' => 'demasiman@gmail.com',
            'password' => Hash::make('demasiman123#'),
            'is_admin' => true,
            'created_at' => now(),

        ]);
        User::create([
            'name' => 'DEMA UNIDA Kelas C',
            'username' => 'demaputri',
            'email' => 'demaputri@gmail.com',
            'is_admin' => true,
            'password' => Hash::make('demaputri@123'),
            'created_at' => now(),

        ]);
        User::create([
            'name' => 'Naufal Harits Prasetia',
            'username' => 'naufalharis',
            'email' => 'naufal@gmail.com',
            'is_admin' => true,
            'password' => Hash::make('bismillah'),
            'created_at' => now(),
        ]);
        User::create([
            'name' => 'SuperAdmin',
            'username' => 'superadmin',
            'email' => 'superadmin@gmail.com',
            'is_admin' => true,
            'password' => Hash::make('@dem4H4d1s4t_y4#$'),
            'created_at' => now(),
        ]);
    }
}