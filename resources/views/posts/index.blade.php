<x-layouts.main title="Posts">
    <h2 class="font-bold text-2xl">
        Posts
    </h2>

    <section class="mt-16 space-y-4">
        @foreach($posts as $post)
            <article class="flex items-center justify-between">
                <a href="{{ route('posts.show', $post) }}" class="text-blue-500 hover:text-blue-600 focus:text-blue-600 hover:underline transition-colors ease-in-out duration-200">
                    <h3 class="font-medium">
                        {{ $post->title }}
                    </h3>
                </a>

                <time datetime="{{ $post->published_at->toDateTimeString() }}" class="text-sm">
                    {{ $post->published_at->format('j M, Y') }}
                </time>
            </article>
        @endforeach
    </section>
</x-layouts.main>
