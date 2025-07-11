<?php

namespace App\Http\Controllers;

use App\Models\Aspirasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AspirasiController extends Controller
{

    public function index()
    {
        $title = 'Aspirasi';
        $active = 'aspirasi';
        return view('aspirasi.index', compact('active', 'title'));
    }
    public function list()
    {
        $aspirasis = Aspirasi::all();
        $title = 'Aspirasi';
        $active = 'aspirasi';
        return view('aspirasi.list', compact('active', 'title', 'aspirasis'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:75',
            'email' => 'required|string|max:75',
            'aspirasi' => 'nullable|string|max:500',
        ]);

        $data = [
            'user_id' => Auth::user()->id,
            'nama' => $request->nama,
            'email' => $request->email,
            'aspirasi' => $request->aspirasi,
            'created_at' => now(),
        ];

        Aspirasi::create($data);

        return redirect()->route('aspirasi.index')->with('success', 'Terimakasih! Aspirasi anda telah tersampaikan!');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Aspirasi $aspirasi)
    {
        Aspirasi::destroy($aspirasi->id);

        return redirect()->route('aspirasi.list')->with('success', 'Aspirasi deleted successfully!');
    }
}