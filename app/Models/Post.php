<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property-read bool $published
 */
class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    public static function booted()
    {
        static::creating(function (Post $post) {
            $post->slug = Str::slug($post->title);
        });

        static::updating(function (Post $post) {
            if (! $post->published_at) {
                $post->slug = Str::slug($post->title);
            }
        });
    }

    public function getPublishedAttribute(): bool
    {
        return $this->published_at?->isPast();
    }

    public function getFormattedContentAttribute(): string
    {
        return Str::markdown($this->content);
    }

    public function scopePublished(Builder $query): void
    {
        $query->whereNotNull('published_at')->whereDate('published_at', '<=', now());
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
