<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AuthorPostController extends Controller
{
    // postingan anda
    public function index()
    {
        return view('posts.postingan_anda', [
            'posts' => Post::query()->latest()->paginate(5)
        ]);
    }

    public function store()
    {
        $attributes = request()->validate(
            [
                'nama_gunung' => ['required', 'unique:posts,nama_gunung'],
                'alamat' => ['required'],
                'harga_simaksi' => ['required', 'integer'],
                'gambar' => ['image'],
                'konten' => ['required']
            ],
            [
                'nama_gunung.required' => 'Nama gunung tidak boleh kosong',
                'alamat.required' => 'Alamat tidak boleh kosong',
                'harga_simaksi.required' => 'Harga simaksi tidak boleh kosong',
                'konten.required' => 'Konten tidak boleh kosong'
            ]
        );

        $attributes['user_id'] = auth()->user()->id;

        Post::create($attributes);

        return redirect('author/postingan-anda')->with('success', 'Postingan berhasil ditambahkan');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return back()->with('success', 'Postingan berhasil dihapus');
    }
}
