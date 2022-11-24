<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentPostController extends Controller
{
    public function store(Post $post)
    {
        request()->validate(
            ['body' => ['required']],
            ['body.required' => 'Tidak boleh kosong!']
        );

        $post->comments()->create([
            'user_id' => request()->user()->id,
            'body' => request('body')
        ]);

        return back();
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();

        return back();
    }
}
