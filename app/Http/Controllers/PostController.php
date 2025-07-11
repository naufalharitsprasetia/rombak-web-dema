<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Berita';
        $active = 'berita';
        $postUtama = Post::latest()->first();
        $posts = Post::where('id', '!=', $postUtama->id)->latest()->get();
        return view('post.index', compact('active', 'title', 'postUtama', 'posts'));
    }
    public function manage()
    {
        $title = 'Manage Post';
        $active = 'manage-Blog';
        $dema = Auth::user();
        $posts = Post::where('user_id', $dema->id)->latest()->get();
        return view('post.manage', compact('active', 'title', 'posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Create New Post';
        $active = 'create-Blog';
        return view('post.create', compact('active', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dema = Auth::user();
        $request->validate([
            'title' => 'required|string|max:200',
            'body' => 'required|string',
            'category' => 'required|string|max:100',
            'link_dokumentasi' => 'nullable|string',
            'image' => 'required|image|max:6000',
        ]);

        $data = [
            'id' => Str::uuid(),
            'user_id' => $dema->id,
            'title' => $request->title,
            'body' => $request->body,
            'link_dokumentasi' => $request->link_dokumentasi,
            'category' => $request->category,
            'created_at' => now(),
        ];

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('blogs', 'public');
        }

        DB::table('posts')->insert($data);

        return redirect()->route('post.manage')->with('success', 'posts created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $title = 'Blog';
        $active = 'berita';
        return view('post.show', compact('active', 'title', 'post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $dema = Auth::user();
        if ($post->user_id !== $dema->id) {
            abort(403);
        }
        $title = 'Edit New Post';
        $active = 'edit-Blog';
        return view('post.edit', compact('active', 'title', 'post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $dema = Auth::user();
        if ($post->user_id !== $dema->id) {
            abort(403);
        }
        // dd($request);
        $request->validate([
            'title' => 'required|string|max:200',
            'body' => 'required|string',
            'link_dokumentasi' => 'nullable|string',
            'category' => 'required|string|max:100',
            'image' => 'nullable|image|max:6000',
        ]);

        // Siapkan data yang akan diperbarui
        $data = [
            'title' => $request->title,
            'body' => $request->body,
            'link_dokumentasi' => $request->link_dokumentasi,
            'category' => $request->category,
            'updated_at' => now(),
        ];

        // Cek apakah ada file gambar baru yang diupload
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($post->image) {
                Storage::disk('public')->delete($post->image);
            }
            // Simpan gambar baru
            $data['image'] = $request->file('image')->store('blogs', 'public');
        }

        // Update data produk di database
        DB::table('posts')->where('id', $post->id)->update($data);

        // Redirect kembali dengan pesan sukses
        return redirect()->route('post.manage')->with('success', 'post updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $dema = Auth::user();
        if ($post->user_id !== $dema->id) {
            abort(403);
        }
        if (!$post) {
            return redirect()->back()->withErrors('post not found!');
        }

        // Hapus gambar dari storage jika ada
        if ($post->image) {
            Storage::disk('public')->delete($post->image);
        }

        // Hapus produk dari database
        DB::table('posts')->where('id', $post->id)->delete();

        // Redirect kembali dengan pesan sukses
        return redirect()->route('post.manage')->with('success', 'post deleted successfully!');
    }
}