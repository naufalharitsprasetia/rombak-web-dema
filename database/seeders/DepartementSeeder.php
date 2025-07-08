<?php

namespace Database\Seeders;

use App\Models\Departement;
use Illuminate\Database\Seeder;
use App\Models\Division;
use Illuminate\Support\Str;

class DepartementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $divisi1 = Division::where('nama', "Badan Pengurus Harian")->first();
        $divisi2 = Division::where('nama', "Divisi Kemahasiswaan")->first();
        $divisi3 = Division::where('nama', "Divisi Keilmuan")->first();
        $divisi4 = Division::where('nama', "Divisi Minat Bakat")->first();
        $divisi5 = Division::where('nama', "Divisi Eksternal")->first();

        Departement::create([
            'id' => Str::uuid(),
            'division_id' => $divisi1->id,
            'nama' => 'Ketua',
            'singkatan' => '',
            'urutan' => 1
        ]);

        Departement::create([
            'id' => Str::uuid(),
            'division_id' => $divisi1->id,
            'nama' => 'Sekretaris',
            'singkatan' => '',
            'urutan' => 2
        ]);

        Departement::create([
            'id' => Str::uuid(),
            'division_id' => $divisi2->id,
            'nama' => 'Pertahanan',
            'singkatan' => '',
            'urutan' => 1
        ]);

        Departement::create([
            'id' => Str::uuid(),
            'division_id' => $divisi3->id,
            'nama' => 'Depripkus',
            'singkatan' => '',
            'urutan' => 1
        ]);

        Departement::create([
            'id' => Str::uuid(),
            'division_id' => $divisi4->id,
            'nama' => 'Kesenian',
            'singkatan' => '',
            'urutan' => 1
        ]);

        Departement::create([
            'id' => Str::uuid(),
            'division_id' => $divisi5->id,
            'nama' => 'Publikasi',
            'singkatan' => '',
            'urutan' => 1
        ]);
        // Anggota Departement
    }
}