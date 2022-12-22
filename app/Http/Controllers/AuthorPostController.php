<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Validation\Rule;

class AuthorPostController extends Controller
{
    // postingan anda
    public function index()
    {
        return view('admin.postingan_anda', [
            'posts' => Post::query()->where('user_id', auth()->id())->latest()->paginate(5)
        ]);
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store()
    {
        switch (request()->file('gambar')) {
            case null:
                $attributes = array_merge($this->validatePost(), [
                    'user_id' => auth()->id(),
                ]);
                break;
            default:
                $attributes = array_merge($this->validatePost(), [
                    'user_id' => auth()->id(),
                    'gambar' => request()->file('gambar')->store('thumbnails')
                ]);
        }

        Post::create($attributes);

        return redirect('admin/posts')->with('success', 'Postingan berhasil ditambahkan');
    }

    public function edit(Post $post)
    {
        return view('admin.edit', ['post' => $post]);
    }

    public function update(Post $post)
    {
        $attributes = array_merge($this->validatePost($post));

        if ($attributes['gambar'] ?? false) $attributes['gambar'] = request()->file('gambar')->store('thumbnails');

        $post->update($attributes);

        return redirect('admin/posts')->with('success', 'Postingan berhasil diubah');
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
