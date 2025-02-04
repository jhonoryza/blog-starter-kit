<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function published(?DateTimeInterface $at = null): static
    {
        return $this->state([
            'published_at' => $at ?? now(),
        ]);
    }

    public function definition()
    {
        return [
            'title' => $this->faker->words(asText: true),
            'content' => $this->faker->realText(),
            'category_id' => Category::factory()
        ];
    }
}
