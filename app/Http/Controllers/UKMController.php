<?php

namespace App\Http\Controllers;

use App\Models\UKM;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UKMController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'UKM';
        $active = 'ukm';
        $ukm_active = 'putra';
        $dema_siman = User::where('username', 'demasiman')->first();
        $ukms = UKM::where('user_id', $dema_siman->id)->get()->groupBy('kategori');
        return view('ukm.index', compact('active', 'ukms', 'title', 'ukm_active'));
    }
    public function indexPutri()
    {
        $title = 'UKM';
        $active = 'ukm';
        $ukm_active = 'putri';
        $dema_putri = User::where('username', 'demaputri')->first();
        $ukms = UKM::where('user_id', $dema_putri->id)->get()->groupBy('kategori');
        return view('ukm.index', compact('active', 'ukms', 'title', 'ukm_active'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'UKM';
        $active = 'ukm';
        return view('ukm.create', compact('active', 'title'));
    }
    public function manage()
    {
        $title = 'UKM';
        $active = 'ukm';
        $dema = Auth::user();
        $ukms = UKM::where('user_id', $dema->id)->get();
        return view('ukm.manage', compact('active', 'ukms', 'title'));
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
            'logo' => 'required|image|max:6000',
        ]);
        $dema = Auth::user();
        $data = [
            'id' => Str::uuid(),
            'user_id' => $dema->id,
            'nama' => $request->nama,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'jumlah_anggota' => $request->jumlah_anggota,
            'link_sosmed' => $request->link_sosmed,
            'created_at' => now(),
        ];

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('ukms', 'public');
        }

        DB::table('u_k_m_s')->insert($data);

        return redirect()->route('ukm.manage')->with('success', 'new ukm created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(UKM $uKM)
    {
        $title = 'UKM';
        $active = 'ukm';
        $ukm = $uKM;
        return view('ukm.show', compact('active', 'ukm', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UKM $uKM)
    {
        $title = 'UKM';
        // cek user
        $dema = Auth::user();
        if ($uKM->user_id !== $dema->id) {
            abort(403);
        }
        $active = 'ukm';
        return view('ukm.edit', compact('active', 'uKM', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UKM $uKM)
    {
        $dema = Auth::user();
        if ($uKM->user_id !== $dema->id) {
            abort(403);
        }
        $request->validate([
            'nama' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'deskripsi' => 'nullable|string|max:5000',
            'jumlah_anggota' => 'nullable|string|max:255',
            'logo' => 'image|max:6000',
            'link_sosmed' => 'nullable|string|max:255',
        ]);

        // Ambil data yang ada di tabel blogs berdasarkan id
        $ukm = DB::table('u_k_m_s')
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
        DB::table('u_k_m_s')
            ->where('id', $ukm->id)
            ->update($data);

        // Redirect kembali dengan pesan sukses
        return redirect()->route('ukm.manage')->with('success', 'ukm updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UKM $uKM)
    {
        $dema = Auth::user();
        if ($uKM->user_id !== $dema->id) {
            abort(403);
        }
        if (!$uKM) {
            return redirect()->back()->withErrors('ukm not found!');
        }
        // Hapus produk dari database
        DB::table('u_k_m_s')
            ->where('id', $uKM->id)
            ->delete();

        // Redirect kembali dengan pesan sukses
        return redirect()->route('ukm.manage')->with('success', 'ukm deleted successfully!');
    }
}