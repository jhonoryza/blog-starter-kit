<?php

use App\Models\Post;

use function Pest\Laravel\get;

it('can render all posts', function () {
    $posts = Post::factory()
        ->times(3)
        ->published()
        ->create();

    get('/posts')
        ->assertOk()
        ->assertViewIs('posts.index')
        ->assertViewHas('posts')
        ->assertSee(...$posts->pluck('title')->values());
});

it('does not render unpublished posts', function () {
    $post = Post::factory()->create();

    get('/posts')
        ->assertOk()
        ->assertViewIs('posts.index')
        ->assertDontSee($post->title);
});

it('sorts posts by published date descending', function () {
    $posts = Post::factory()
        ->times(3)
        ->published()
        ->create()
        ->sortByDesc('published_at');

    get('/posts')
        ->assertOk()
        ->assertViewIs('posts.index')
        ->assertSeeInOrder($posts->pluck('title')->toArray());
});
