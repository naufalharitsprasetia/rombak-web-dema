<?php

namespace App\Http\Controllers;

use App\Models\AnggotaDepartement;
use App\Models\Departement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AnggotaDepartementController extends Controller
{
    /**
     *   $table->foreignUuid('departement_id')->constrained()->onDelete('cascade');
     *   $table->string('nama');
     *   $table->string('urutan');
     *   $table->string('prodi');
     *   $table->string('asal')->nullable();
     **/

    public function index()
    {
        $active = 'anggota_departement';
        $anggota_departements = AnggotaDepartement::orderBy('urutan', 'asc')->get();
        return view('anggota_departement.index',  compact('active', 'anggota_departements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departements = Departement::all();
        $active = 'anggota_departement';
        return view('anggota_departement.create', compact('active', 'departements'));
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
            $data['image'] = $request->file('image')->store('members', 'public');
        }

        DB::table('anggota_departements')->insert($data);

        return redirect()->route('dashboard')->with('success', 'new anggota-departement created successfully!');
    }

    /**
     * Display the specified resource.
     */
    // public function show(AnggotaDepartement $anggotaDepartement)
    // {
    //     $active = 'departement';
    //     return view('departement.show',  compact('active', 'departement'));
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AnggotaDepartement $anggotaDepartement)
    {
        $departements = Departement::all();
        $active = 'anggota_departement';
        return view('anggota_departement.edit', compact('active', 'departements', 'anggotaDepartement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AnggotaDepartement $anggotaDepartement)
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
            if ($ukm->image) {
                Storage::disk('public')->delete($ukm->image);
            }
            // Simpan gambar baru
            $data['image'] = $request->file('image')->store('members', 'public');
        }
        // Update data produk di database
        DB::table('anggota_departements')->where('id', $anggotaDepartement->id)->update($data);

        // Redirect kembali dengan pesan sukses
        return redirect()->route('dashboard')->with('success', 'anggota departement updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AnggotaDepartement $anggotaDepartement)
    {
        if (!$anggotaDepartement) {
            return redirect()->back()->withErrors('anggota departement not found!');
        }
        // Hapus produk dari database
        DB::table('anggota_departements')->where('id', $anggotaDepartement->id)->delete();

        // Redirect kembali dengan pesan sukses
        return redirect()->route('dashboard')->with('success', 'anggota departement deleted successfully!');
    }
}
