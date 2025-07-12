<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\AnggotaDepartement;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AnggotaDepartementController extends Controller
{
    /**
     *
     **/
    public function manage()
    {
        $title = 'Anggota Departement';
        $active = 'anggota_departement';
        $dema = Auth::user();
        $anggota_departements = AnggotaDepartement::where('user_id', $dema->id)->orderBy('urutan', 'asc')->get();
        return view('anggota_departement.manage',  compact('active', 'title', 'anggota_departements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Create Anggota Departement';
        $dema = Auth::user();
        $departements = Departement::where('user_id', $dema->id)->orderBy('urutan', 'asc')->get();
        $active = 'anggota_departement';
        return view('anggota_departement.create', compact('active', 'title', 'departements'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dema = Auth::user();
        $request->validate([
            'nim' => 'required|string|max:50',
            'nama' => 'required|string|max:255',
            'departement_id' => 'required',
            'urutan' => 'required|integer',
            'prodi' => 'required|string|max:255',
            'asal' => 'nullable|string|max:255',
            'image' => 'nullable|image|max:5000',

        ]);

        $data = [
            'id' => Str::uuid(),
            'user_id' => $dema->id,
            'nim' => $request->nim,
            'nama' => $request->nama,
            'departement_id' => $request->departement_id,
            'urutan' => $request->urutan,
            'prodi' => $request->prodi,
            'asal' => $request->asal,
            'created_at' => now(),
        ];
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('members', 'public');
        }

        DB::table('anggota_departements')->insert($data);

        return redirect()->route('anggota_departement.manage')->with('success', 'new anggota-departement created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AnggotaDepartement $anggotaDepartement)
    {
        $dema = Auth::user();
        if ($anggotaDepartement->user_id !== $dema->id) {
            abort(403);
        }
        $title = 'Edit Anggota Departement';
        $active = 'anggota_departement';
        $dema = Auth::user();
        $departements = Departement::where('user_id', $dema->id)->orderBy('urutan', 'asc')->get();

        return view('anggota_departement.edit', compact('active', 'title', 'departements', 'anggotaDepartement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AnggotaDepartement $anggotaDepartement)
    {
        $dema = Auth::user();
        if ($anggotaDepartement->user_id !== $dema->id) {
            abort(403);
        }
        $request->validate([
            'nim' => 'required|string|max:50',
            'nama' => 'required|string|max:255',
            'departement_id' => 'required',
            'urutan' => 'required|integer',
            'prodi' => 'required|string|max:255',
            'asal' => 'nullable|string|max:255',
            'image' => 'nullable|image|max:5000',
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
            if ($anggotaDepartement->image) {
                Storage::disk('public')->delete($anggotaDepartement->image);
            }
            // Simpan gambar baru
            $data['image'] = $request->file('image')->store('members', 'public');
        }
        // Update data produk di database
        DB::table('anggota_departements')->where('id', $anggotaDepartement->id)->update($data);

        // Redirect kembali dengan pesan sukses
        return redirect()->route('anggota_departement.manage')->with('success', 'anggota departement updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AnggotaDepartement $anggotaDepartement)
    {
        $dema = Auth::user();
        if ($anggotaDepartement->user_id !== $dema->id) {
            abort(403);
        }

        if (!$anggotaDepartement) {
            return redirect()->back()->withErrors('anggota departement not found!');
        }
        // Hapus produk dari database
        DB::table('anggota_departements')->where('id', $anggotaDepartement->id)->delete();

        // Redirect kembali dengan pesan sukses
        return redirect()->route('anggota_departement.manage')->with('success', 'anggota departement deleted successfully!');
    }
}