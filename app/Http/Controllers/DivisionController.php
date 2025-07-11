<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DivisionController extends Controller
{
    public function index()
    {
        $dema = Auth::user();
        $divisions = Division::where('user_id', $dema->id)->orderBy('urutan', 'asc')->get();
        $title = 'Divisi';
        $active = 'divisi';
        return view('divisi.index', compact('active', 'title', 'divisions'));
    }

    public function create()
    {
        $title = 'Create Divisi';
        $active = 'divisi';
        return view('divisi.create', compact('title', 'active'));
    }

    public function store(Request $request)
    {
        $dema = Auth::user();
        $request->validate([
            'nama' => 'required|string|max:255',
            'urutan' => 'required|integer',
            'deskripsi' => 'nullable|string|max:255',
            'singkatan' => 'nullable|string|max:255',
        ]);

        $data = [
            'id' => Str::uuid(),
            'user_id' => $dema->id,
            'nama' => $request->nama,
            'urutan' => $request->urutan,
            'deskripsi' => $request->deskripsi,
            'singkatan' => $request->singkatan,
            'created_at' => now(),
        ];

        DB::table('divisions')->insert($data);

        return redirect()->route('divisi.index')->with('success', 'new division created successfully!');
    }

    public function edit(Division $division)
    {
        $dema = Auth::user();
        if ($division->user_id !== $dema->id) {
            abort(403);
        }
        $title = 'Edit Divisi';
        $active = 'divisi';
        return view('divisi.edit', compact('active', 'title', 'division'));
    }

    public function update(Request $request, Division $division)
    {
        $dema = Auth::user();
        if ($division->user_id !== $dema->id) {
            abort(403);
        }
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
        return redirect()->route('divisi.index')->with('success', 'division updated successfully!');
    }

    public function destroy(Division $division)
    {
        $dema = Auth::user();
        if ($division->user_id !== $dema->id) {
            abort(403);
        }

        if (!$division) {
            return redirect()->back()->withErrors('division not found!');
        }
        // Hapus produk dari database
        DB::table('divisions')->where('id', $division->id)->delete();

        // Redirect kembali dengan pesan sukses
        return redirect()->route('divisi.index')->with('success', 'division deleted successfully!');
    }
}