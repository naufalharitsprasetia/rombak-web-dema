<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Division;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dema_siman = User::where('username', 'demasiman')->first();
        $dema_putri = User::where('username', 'demaputri')->first();
        Division::create([
            'id' => Str::uuid(),
            'user_id' => $dema_siman->id,
            'nama' => 'Badan Pengurus Harian',
            'singkatan' => 'BPH',
            'urutan' => 1
        ]);
        Division::create([
            'id' => Str::uuid(),
            'user_id' => $dema_siman->id,
            'nama' => 'Divisi Kemahasiswaan',
            'urutan' => 2
        ]);
        Division::create([
            'id' => Str::uuid(),
            'user_id' => $dema_siman->id,
            'nama' => 'Divisi Keilmuan',
            'urutan' => 3
        ]);
        Division::create([
            'id' => Str::uuid(),
            'user_id' => $dema_siman->id,
            'nama' => 'Divisi Minat Bakat',
            'urutan' => 4
        ]);
        Division::create([
            'id' => Str::uuid(),
            'user_id' => $dema_siman->id,
            'nama' => 'Divisi Eksternal',
            'urutan' => 5
        ]);
    }
}