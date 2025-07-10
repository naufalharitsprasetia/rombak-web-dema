<?php

namespace App\Http\Controllers;

use App\Models\UKM;
use App\Models\UKMPutri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class UKMPutriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'UKM';
        $active = 'ukm';
        $ukms = UKMPutri::all()->groupBy('kategori');
        return view('ukm-putri.index', compact('active', 'ukms', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $active = 'ukm';
        return view('ukm-putri.create', compact('active'));
    }
    public function list()
    {
        $active = 'ukm';
        $ukms = UKMPutri::all();
        return view('ukm-putri.list', compact('active', 'ukms'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'deskripsi' => 'nullable|string|max:5000',
            'jumlah_anggota' => 'nullable|string|max:255',
            'link_sosmed' => 'nullable|string|max:255',
            'logo' => 'required|image|max:5000',
        ]);

        $data = [
            'id' => Str::uuid(),
            'nama' => $request->nama,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'jumlah_anggota' => $request->jumlah_anggota,
            'link_sosmed' => $request->link_sosmed,
            'created_at' => now(),
        ];

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('ukm-putri', 'public');
        }

        DB::table('u_k_m_putris')->insert($data);

        return redirect()->route('dashboard')->with('success', 'new ukm created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(UKMPutri $uKM)
    {
        $active = 'ukm';
        $ukm = $uKM;
        return view('ukm-putri.show', compact('active', 'ukm'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UKMPutri $uKM)
    {
        $active = 'ukm';
        return view('ukm-putri.edit', compact('active', 'uKM'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UKMPutri $uKM)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'deskripsi' => 'nullable|string|max:5000',
            'jumlah_anggota' => 'nullable|string|max:255',
            'logo' => 'image|max:5000',
            'link_sosmed' => 'nullable|string|max:255',
        ]);

        // Ambil data yang ada di tabel blogs berdasarkan id
        $ukm = DB::table('u_k_m_putris')
            ->where('id', $uKM->id)
            ->first();

        if (!$ukm) {
            return redirect()->back()->withErrors('ukm not found!');
        }
        // Siapkan data yang akan diperbarui
        $data = [
            'nama' => $request->nama,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'jumlah_anggota' => $request->jumlah_anggota,
            'link_sosmed' => $request->link_sosmed,
            'updated_at' => now(),
        ];

        if ($request->hasFile('logo')) {
            // Hapus gambar lama jika ada
            if ($ukm->logo) {
                Storage::disk('public')->delete($ukm->logo);
            }
            // Simpan gambar baru
            $data['logo'] = $request->file('logo')->store('ukms', 'public');
        }

        // Update data produk di database
        DB::table('u_k_m_putris')
            ->where('id', $ukm->id)
            ->update($data);

        // Redirect kembali dengan pesan sukses
        return redirect()->route('dashboard')->with('success', 'ukm updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UKMPutri $uKM)
    {
        if (!$uKM) {
            return redirect()->back()->withErrors('ukm not found!');
        }
        // Hapus produk dari database
        DB::table('u_k_m_putris')
            ->where('id', $uKM->id)
            ->delete();

        // Redirect kembali dengan pesan sukses
        return redirect()->route('dashboard')->with('success', 'ukm deleted successfully!');
    }
}