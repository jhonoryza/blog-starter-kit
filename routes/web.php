<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Posts;

Route::prefix('/posts')->as('posts.')->group(function () {
    Route::get('/{post:slug}', Posts\ShowController::class)->name('show');
});
