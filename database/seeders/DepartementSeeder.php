<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Division;
use App\Models\Departement;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DepartementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dema_siman = User::where('username', 'demasiman')->first();
        $dema_putri = User::where('username', 'demaputri')->first();
        $divisi1 = Division::where('nama', "Badan Pengurus Harian")->first();
        $divisi2 = Division::where('nama', "Divisi Kemahasiswaan")->first();
        $divisi3 = Division::where('nama', "Divisi Keilmuan")->first();
        $divisi4 = Division::where('nama', "Divisi Minat Bakat")->first();
        $divisi5 = Division::where('nama', "Divisi Eksternal")->first();

        Departement::create([
            'id' => Str::uuid(),
            'division_id' => $divisi1->id,
            'user_id' => $dema_siman->id,
            'nama' => 'Ketua',
            'singkatan' => '',
            'urutan' => 1
        ]);

        Departement::create([
            'id' => Str::uuid(),
            'division_id' => $divisi1->id,
            'user_id' => $dema_siman->id,
            'nama' => 'Sekretaris',
            'singkatan' => '',
            'urutan' => 2
        ]);

        Departement::create([
            'id' => Str::uuid(),
            'division_id' => $divisi2->id,
            'user_id' => $dema_siman->id,
            'nama' => 'Pertahanan',
            'singkatan' => '',
            'urutan' => 1
        ]);

        Departement::create([
            'id' => Str::uuid(),
            'division_id' => $divisi3->id,
            'user_id' => $dema_siman->id,
            'nama' => 'Depripkus',
            'singkatan' => '',
            'urutan' => 1
        ]);

        Departement::create([
            'id' => Str::uuid(),
            'division_id' => $divisi4->id,
            'user_id' => $dema_siman->id,
            'nama' => 'Kesenian',
            'singkatan' => '',
            'urutan' => 1
        ]);

        Departement::create([
            'id' => Str::uuid(),
            'division_id' => $divisi5->id,
            'user_id' => $dema_siman->id,
            'nama' => 'Publikasi',
            'singkatan' => '',
            'urutan' => 1
        ]);
        // Anggota Departement
    }
}
