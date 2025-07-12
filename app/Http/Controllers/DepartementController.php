<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Division;
use App\Models\Departement;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DepartementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Departemen';
        $active = 'departement';
        $departement_active = 'putra';
        $dema_siman = User::where('username', 'demasiman')->first();
        $divisions = Division::where('user_id', $dema_siman->id)->orderBy('urutan', 'asc')->get();
        // dd($divisions);
        return view('departement.index',  compact('active', 'title', 'divisions', 'departement_active'));
    }
    public function indexPutri()
    {
        $title = 'Departemen';
        $active = 'departement';
        $departement_active = 'putri';
        $dema_putri = User::where('username', 'demaputri')->first();
        $divisions = Division::where('user_id', $dema_putri->id)->orderBy('urutan', 'asc')->get();
        return view('departement.index',  compact('active', 'title', 'divisions', 'departement_active'));
    }

    public function manage()
    {
        $title = 'Manage Departement';
        $active = 'departement';
        $dema = Auth::user();
        $departements = Departement::where('user_id', $dema->id)->orderBy('urutan', 'asc')->get();
        return view('departement.manage',  compact('active', 'title', 'departements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dema = Auth::user();
        $divisions = Division::where('user_id', $dema->id)->get();
        $title = 'Departement - Create';
        $active = 'departement';
        return view('departement.create', compact('active', 'title', 'divisions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dema = Auth::user();
        $request->validate([
            'nama' => 'required|string|max:255',
            'division_id' => 'required',
            'urutan' => 'required|integer',
            'deskripsi' => 'nullable|string|max:255',
            'singkatan' => 'nullable|string|max:255',
            'image' => 'required|image|max:6000',
        ]);

        $data = [
            'id' => Str::uuid(),
            'user_id' => $dema->id,
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

        return redirect()->route('departement.manage')->with('success', 'new departements created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Departement $departement)
    {
        $title = 'Departement Show';
        $active = 'departement';
        return view('departement.show',  compact('active', 'title', 'departement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Departement $departement)
    {
        $dema = Auth::user();
        if ($departement->user_id !== $dema->id) {
            abort(403);
        }
        $divisions = Division::where('user_id', $dema->id)->get();
        $title = 'Departement Edit';
        $active = 'departement';
        return view('departement.edit', compact('active', 'title', 'divisions', 'departement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Departement $departement)
    {
        $dema = Auth::user();
        if ($departement->user_id !== $dema->id) {
            abort(403);
        }
        $request->validate([
            'nama' => 'required|string|max:255',
            'division_id' => 'required',
            'urutan' => 'required|integer',
            'deskripsi' => 'nullable|string|max:255',
            'singkatan' => 'nullable|string|max:255',
            'image' => 'nullable|image|max:6000',
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
        return redirect()->route('departement.manage')->with('success', 'departement updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Departement $departement)
    {
        $dema = Auth::user();
        if ($departement->user_id !== $dema->id) {
            abort(403);
        }
        if (!$departement) {
            return redirect()->back()->withErrors('departement not found!');
        }
        // Hapus produk dari database
        DB::table('departements')->where('id', $departement->id)->delete();

        // Redirect kembali dengan pesan sukses
        return redirect()->route('departement.manage')->with('success', 'departement deleted successfully!');
    }
}