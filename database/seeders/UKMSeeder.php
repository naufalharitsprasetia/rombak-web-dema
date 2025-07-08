<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UKM;
use Illuminate\Support\Str;


class UKMSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        //     $table->string('nama');
        // $table->string('deskripsi');
        // $table->string('kategori');
        // $table->string('jumlah_anggota')->nullable();
        // $table->string('logo');
        // $table->string('link_sosmed')->nullable();
        UKM::create([
            'id' => Str::uuid(),
            'nama' => 'Futsalisty',
            'deskripsi' => '',
            'kategori' => 'Olah Raga',
            'jumlah_anggota' => 20,
            'logo' => 'ukms/futsal.jpeg',
            'link_sosmed' => '',
        ]);
        UKM::create([
            'id' => Str::uuid(),
            'nama' => 'Luqmanul Hakim',
            'deskripsi' => '',
            'kategori' => 'Olah Pikir',
            'jumlah_anggota' => 20,
            'logo' => 'ukms/luqmanulhakim.jpeg',
            'link_sosmed' => '',
        ]);
    }
}
