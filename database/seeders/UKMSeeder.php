<?php

namespace Database\Seeders;

use App\Models\UKM;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class UKMSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dema_siman = User::where('username', 'demasiman')->first();
        $dema_putri = User::where('username', 'demaputri')->first();
        // putra
        UKM::create([
            'id' => Str::uuid(),
            'user_id' => $dema_siman->id,
            'nama' => 'Futsalisty',
            'deskripsi' => 'ini adalah deskripsi wkwk',
            'kategori' => 'Olah Raga',
            'jumlah_anggota' => 20,
            'logo' => 'ukms/futsal.jpeg',
            'link_sosmed' => '',
        ]);
        UKM::create([
            'id' => Str::uuid(),
            'user_id' => $dema_siman->id,
            'nama' => 'Luqmanul Hakim',
            'deskripsi' => 'ini adalah deskripsi wkwk',
            'kategori' => 'Olah Pikir',
            'jumlah_anggota' => 16,
            'logo' => 'ukms/luqmanulhakim.jpeg',
            'link_sosmed' => '',
        ]);
        // putri
        UKM::create([
            'id' => Str::uuid(),
            'user_id' => $dema_putri->id,
            'nama' => 'Fotografi',
            'deskripsi' => 'ini adalah deskripsi wkwk',
            'kategori' => 'Olah Rasa',
            'jumlah_anggota' => 20,
            'logo' => 'ukm-putri/UKM-FOTOGRAFI.JPG',
            'link_sosmed' => '',
        ]);
        UKM::create([
            'id' => Str::uuid(),
            'user_id' => $dema_putri->id,
            'nama' => 'Tata Rias',
            'deskripsi' => 'ini adalah deskripsi wkwk',
            'kategori' => 'Olah Pikir',
            'jumlah_anggota' => 16,
            'logo' => 'ukm-putri/UKM-TATA-RIAS.JPG',
            'link_sosmed' => '',
        ]);
    }
}