<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentPostController extends Controller
{
    public function store(Request $request, Post $post)
    {
        if ($request->ajax()) {
            request()->validate(
                ['body' => ['required']],
                ['body.required' => 'Tidak boleh kosong!']
            );

            $data = $post->comments()->create([
                'user_id' => request()->user()->id,
                'body' => request('body')
            ]);
            return response()->json([
                'success' => true,
                'data' => $data
            ]);
        }
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();

        return back();
    }
}
