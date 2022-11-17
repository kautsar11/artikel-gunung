<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // beranda
    public function index()
    {
        return view('posts.beranda', [
            'posts' => Post::query()->latest()->paginate(6)
        ]);
    }

    // postingan anda
    public function allPost()
    {
        return view('posts.postingan_anda', [
            'posts' => Post::query()->latest()->paginate(5)
        ]);
    }
}
