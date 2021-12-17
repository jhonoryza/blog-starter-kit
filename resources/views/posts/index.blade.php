<x-layouts.main title="Posts">
    @foreach($posts as $post)
        {{ $post->title }}
    @endforeach
</x-layouts.main>
