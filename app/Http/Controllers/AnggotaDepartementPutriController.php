<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\DepartementPutri;
use Illuminate\Support\Facades\DB;
use App\Models\AnggotaDepartementPutri;
use Illuminate\Support\Facades\Storage;

class AnggotaDepartementPutriController extends Controller
{
    public function index()
    {
        $title = 'Anggota Departemen Putri';
        $active = 'anggota_departement';
        $anggota_departements = AnggotaDepartementPutri::orderBy('urutan', 'asc')->get();
        return view('anggota_departement_putri.index',  compact('active', 'title', 'anggota_departements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departements = DepartementPutri::all();
        $title = 'Anggota Departemen Putri';
        $active = 'anggota_departement_putri';
        return view('anggota_departement.create', compact('active', 'title', 'departements'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required|string|max:50',
            'nama' => 'required|string|max:255',
            'departement_id' => 'required',
            'urutan' => 'required|integer',
            'prodi' => 'string|max:255',
            'asal' => 'nullable|string|max:255',
            'image' => 'required|image|max:5000',

        ]);

        $data = [
            'id' => Str::uuid(),
            'nim' => $request->nim,
            'nama' => $request->nama,
            'departement_id' => $request->departement_id,
            'urutan' => $request->urutan,
            'prodi' => $request->prodi,
            'asal' => $request->asal,
            'created_at' => now(),
        ];
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('member_putris', 'public');
        }

        DB::table('anggota_departement_putris')->insert($data);

        return redirect()->route('dashboard')->with('success', 'new anggota-departement-putri created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AnggotaDepartementPutri $anggotaDepartementPutri)
    {
        $departements = DepartementPutri::all();
        $active = 'anggota_departement_putri';
        return view('anggota_departement_putri.edit', compact('active', 'departements', 'anggotaDepartementPutri'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AnggotaDepartementPutri $anggotaDepartementPutri)
    {
        $request->validate([
            'nim' => 'required|string|max:50',
            'nama' => 'required|string|max:255',
            'departement_id' => 'required',
            'urutan' => 'required|integer',
            'prodi' => 'string|max:255',
            'asal' => 'nullable|string|max:255',
            'image' => 'image|max:5000',
        ]);

        // Siapkan data yang akan diperbarui
        $data = [
            'nim' => $request->nim,
            'nama' => $request->nama,
            'departement_id' => $request->departement_id,
            'urutan' => $request->urutan,
            'prodi' => $request->prodi,
            'asal' => $request->asal,
            'updated_at' => now(),
        ];
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($anggotaDepartementPutri->image) {
                Storage::disk('public')->delete($anggotaDepartementPutri->image);
            }
            // Simpan gambar baru
            $data['image'] = $request->file('image')->store('members', 'public');
        }
        // Update data produk di database
        DB::table('anggota_departement_putris')->where('id', $anggotaDepartementPutri->id)->update($data);

        // Redirect kembali dengan pesan sukses
        return redirect()->route('dashboard')->with('success', 'anggota departement putri updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AnggotaDepartementPutri $anggotaDepartementPutri)
    {
        if (!$anggotaDepartementPutri) {
            return redirect()->back()->withErrors('anggota departement not found!');
        }
        // Hapus produk dari database
        DB::table('anggota_departement_putris')->where('id', $anggotaDepartementPutri->id)->delete();

        // Redirect kembali dengan pesan sukses
        return redirect()->route('dashboard')->with('success', 'anggota departement putri deleted successfully!');
    }
}
