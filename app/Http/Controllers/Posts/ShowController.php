<?php

namespace App\Http\Controllers\Posts;

use App\Models\Post;
use Illuminate\Http\Request;

class ShowController
{
    public function __invoke(Request $request, Post $post)
    {
        if (! $request->user() && ! $post->published) {
            // TODO: Do a redirect instead.
            abort(404);
        }

        return view('posts.show', [
            'post' => $post,
        ]);
    }
}
