<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UKMPutri;
use Illuminate\Support\Str;


class UKMPutriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UKMPutri::create([
            'id' => Str::uuid(),
            'nama' => 'Tata Boga',
            'deskripsi' => '',
            'kategori' => 'Olah Raga',
            'jumlah_anggota' => 20,
            'logo' => 'ukm-putri/futsal.jpeg',
            'link_sosmed' => '',
        ]);
        UKMPutri::create([
            'id' => Str::uuid(),
            'nama' => 'Fotografi',
            'deskripsi' => '',
            'kategori' => 'Olah Pikir',
            'jumlah_anggota' => 20,
            'logo' => 'ukm-putri/luqmanulhakim.jpeg',
            'link_sosmed' => '',
        ]);
    }
}