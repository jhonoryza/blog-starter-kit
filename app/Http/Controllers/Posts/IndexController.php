<?php

namespace App\Http\Controllers\Posts;

use App\Models\Post;

class IndexController
{
    public function __invoke()
    {
        return view('posts.index', [
            'posts' => Post::query()
                ->published()
                ->orderBy('published_at', 'DESC')
                ->get(),
        ]);
    }
}
