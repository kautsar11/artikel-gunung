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
            'posts' => Post::query()->latest()->filter(
                request(['search'])
            )->paginate(6)
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.post-content', [
            'post' => $post
        ]);
    }
}
