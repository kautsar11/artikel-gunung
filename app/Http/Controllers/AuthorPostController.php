<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Validation\Rule;

class AuthorPostController extends Controller
{
    // postingan anda
    public function index()
    {
        return view('posts.postingan_anda', [
            // 'posts' => Post::query()->latest()->paginate(5)
            'posts' => Post::query()->where('user_id', auth()->id())->latest()->paginate(5)
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $attributes = array_merge($this->validatePost(), [
            'user_id' => auth()->id(),
            'gambar' => request()->file('gambar')->store('thumbnails')
        ]);

        Post::create($attributes);

        return redirect('author/posts')->with('success', 'Postingan berhasil ditambahkan');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    public function update(Post $post)
    {
        $attributes = array_merge($this->validatePost($post));

        if ($attributes['gambar'] ?? false) $attributes['gambar'] = request()->file('gambar')->store('thumbnails');

        $post->update($attributes);

        return redirect('author/posts')->with('success', 'Postingan berhasil diubah');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return back()->with('success', 'Postingan berhasil dihapus');
    }

    protected function validatePost(?Post $post = null): array
    {
        $post ??= new Post();

        return request()->validate(
            [
                'nama_gunung' => ['required', Rule::unique('posts', 'nama_gunung')->ignore($post->id)],
                'alamat' => ['required'],
                'harga_simaksi' => ['required', 'integer'],
                'gambar' => ['image'],
                'konten' => ['required']
            ],
            [
                'nama_gunung.required' => 'Nama gunung tidak boleh kosong',
                'nama_gunung.unique' => 'Nama gunung sudah ada',
                'alamat.required' => 'Alamat tidak boleh kosong',
                'harga_simaksi.required' => 'Harga simaksi tidak boleh kosong',
                'harga_simaksi.integer' => 'Input harus berupa angka',
                'konten.required' => 'Konten tidak boleh kosong'
            ]
        );
    }
}
