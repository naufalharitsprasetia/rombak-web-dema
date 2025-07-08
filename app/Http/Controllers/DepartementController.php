<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use App\Models\Division;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DepartementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $active = 'departement';
        $divisions = Division::orderBy('urutan', 'asc')->get();
        return view('departement.index',  compact('active', 'divisions'));
    }
    public function list()
    {
        $active = 'departement';
        $departements = Departement::all();
        return view('departement.list',  compact('active', 'departements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $divisions = Division::all();
        $active = 'departement';
        return view('departement.create', compact('active', 'divisions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'division_id' => 'required',
            'urutan' => 'required|integer',
            'deskripsi' => 'nullable|string|max:255',
            'singkatan' => 'nullable|string|max:255',
            'image' => 'image|max:5000',
        ]);

        $data = [
            'id' => Str::uuid(),
            'nama' => $request->nama,
            'division_id' => $request->division_id,
            'urutan' => $request->urutan,
            'deskripsi' => $request->deskripsi,
            'singkatan' => $request->singkatan,
            'created_at' => now(),
        ];
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('departements', 'public');
        }

        DB::table('departements')->insert($data);

        return redirect()->route('dashboard')->with('success', 'new departements created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Departement $departement)
    {
        $active = 'departement';
        return view('departement.show',  compact('active', 'departement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Departement $departement)
    {
        $divisions = Division::all();
        $active = 'departement';
        return view('departement.edit', compact('active', 'divisions', 'departement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Departement $departement)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'division_id' => 'required',
            'urutan' => 'required|integer',
            'deskripsi' => 'nullable|string|max:255',
            'singkatan' => 'nullable|string|max:255',
            'image' => 'image|max:5000',
        ]);

        // Ambil data yang ada di tabel blogs berdasarkan id
        $division = DB::table('departements')->where('id', $departement->id)->first();

        if (!$division) {
            return redirect()->back()->withErrors('division not found!');
        }
        // Siapkan data yang akan diperbarui
        $data = [
            'nama' => $request->nama,
            'division_id' => $request->division_id,
            'urutan' => $request->urutan,
            'deskripsi' => $request->deskripsi,
            'singkatan' => $request->singkatan,
            'updated_at' => now(),
        ];
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($departement->image) {
                Storage::disk('public')->delete($departement->image);
            }
            // Simpan gambar baru
            $data['image'] = $request->file('image')->store('departements', 'public');
        }
        // Update data produk di database
        DB::table('departements')->where('id', $departement->id)->update($data);

        // Redirect kembali dengan pesan sukses
        return redirect()->route('dashboard')->with('success', 'departement updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Departement $departement)
    {
        if (!$departement) {
            return redirect()->back()->withErrors('departement not found!');
        }
        // Hapus produk dari database
        DB::table('departements')->where('id', $departement->id)->delete();

        // Redirect kembali dengan pesan sukses
        return redirect()->route('dashboard')->with('success', 'departement deleted successfully!');
    }
}