<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run()
    {
        $categories = Category::all();
        Post::factory(10)
            ->recycle($categories)
            ->create();
    }
}
