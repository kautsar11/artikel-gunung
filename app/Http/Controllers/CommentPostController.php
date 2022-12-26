<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
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
                'data' => $data,
                'user' => User::query()->where('id', auth()->id())->first()
            ]);
        }
    }

    public function destroy(Request $request, Comment $comment)
    {
        if ($request->ajax()) {
            $comment->delete();

            return response()->json([
                'success' => true
            ]);
        }
    }
}
