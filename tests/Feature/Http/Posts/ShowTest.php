<?php

use App\Models\Post;

use function Pest\Laravel\get;

it('can render a post', function () {
    $post = Post::factory()
        ->published()
        ->create();

    get('/posts/' . $post->slug)
        ->assertViewIs('posts.show')
        ->assertViewHas('post', $post)
        ->assertSeeText($post->title);
});
