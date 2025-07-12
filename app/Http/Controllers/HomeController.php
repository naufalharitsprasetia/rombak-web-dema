<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = 'Beranda';
        $active = 'beranda';
        $dema_siman = User::where('username', 'demasiman')->first();
        $dema_putri = User::where('username', 'demaputri')->first();
        $postUtama = Post::latest()->first();
        $postsPutra = Post::where('id', '!=', $postUtama->id)->where('user_id', $dema_siman->id)->latest()->limit(3)->get();
        $postsPutri = Post::where('id', '!=', $postUtama->id)->where('user_id', $dema_putri->id)->latest()->limit(3)->get();
        // dd($postUtama);
        return view('home.index', compact('active', 'title', 'postUtama', 'postsPutra', 'postsPutri'));
    }
    public function tentang()
    {
        $title = 'Tentang Aplikasi';
        $active = 'tentang';
        return view('home.tentang', compact('active', 'title'));
    }
    public function kontak()
    {
        $title = 'Kontak Kami';
        $active = 'kontak';
        return view('home.kontak', compact('active', 'title'));
    }
}