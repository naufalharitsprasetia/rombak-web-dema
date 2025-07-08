<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Division;
use Illuminate\Support\Str;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Division::create([
            'id' => Str::uuid(),
            'nama' => 'Badan Pengurus Harian',
            'singkatan' => 'BPH',
            'urutan' => 1
        ]);
        Division::create([
            'id' => Str::uuid(),
            'nama' => 'Divisi Kemahasiswaan',
            'urutan' => 2
        ]);
        Division::create([
            'id' => Str::uuid(),
            'nama' => 'Divisi Keilmuan',
            'urutan' => 3
        ]);
        Division::create([
            'id' => Str::uuid(),
            'nama' => 'Divisi Minat Bakat',
            'urutan' => 4
        ]);
        Division::create([
            'id' => Str::uuid(),
            'nama' => 'Divisi Eksternal',
            'urutan' => 5
        ]);
    }
}