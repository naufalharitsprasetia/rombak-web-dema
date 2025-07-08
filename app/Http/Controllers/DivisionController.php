<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $divisions = Division::orderBy('urutan', 'asc')->get();
        $active = 'divisi';
        return view('divisi.index', compact('active', 'divisions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $active = 'divisi';
        return view('divisi.create', compact('active'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'nama' => 'required|string|max:255',
            'urutan' => 'required|integer',
            'deskripsi' => 'nullable|string|max:255',
            'singkatan' => 'nullable|string|max:255',
        ]);

        $data = [
            'id' => Str::uuid(),
            'nama' => $request->nama,
            'urutan' => $request->urutan,
            'deskripsi' => $request->deskripsi,
            'singkatan' => $request->singkatan,
            'created_at' => now(),
        ];

        DB::table('divisions')->insert($data);

        return redirect()->route('dashboard')->with('success', 'new division created successfully!');
    }

    /**
     * Display the specified resource.
     */
    // public function show(Division $division)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Division $division)
    {
        $active = 'divisi';
        return view('divisi.edit', compact('active', 'division'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Division $division)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'urutan' => 'required|integer',
            'deskripsi' => 'nullable|string|max:255',
            'singkatan' => 'nullable|string|max:255',
        ]);

        // Ambil data yang ada di tabel blogs berdasarkan id
        $division = DB::table('divisions')->where('id', $division->id)->first();

        if (!$division) {
            return redirect()->back()->withErrors('division not found!');
        }
        // Siapkan data yang akan diperbarui
        $data = [
            'nama' => $request->nama,
            'urutan' => $request->urutan,
            'deskripsi' => $request->deskripsi,
            'singkatan' => $request->singkatan,
            'updated_at' => now(),
        ];

        // Update data produk di database
        DB::table('divisions')->where('id', $division->id)->update($data);

        // Redirect kembali dengan pesan sukses
        return redirect()->route('dashboard')->with('success', 'division updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Division $division)
    {
        if (!$division) {
            return redirect()->back()->withErrors('division not found!');
        }
        // Hapus produk dari database
        DB::table('divisions')->where('id', $division->id)->delete();

        // Redirect kembali dengan pesan sukses
        return redirect()->route('dashboard')->with('success', 'division deleted successfully!');
    }
}