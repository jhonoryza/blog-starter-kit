<x-layouts.main :title="$post->title">
    <div class="px-4 pt-12 pb-24 mx-auto sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center">
            <h1
                class="text-3xl font-extrabold text-transparent sm:text-6xl bg-clip-text bg-gradient-to-r from-blue-100 via-blue-400 to-blue-700"
            >
                {{ $post->title }}
            </h1>
        </div>
    </div>

    <article class="prose prose-blue">
        {!! $post->formatted_content !!}
    </article>
</x-layouts.main>
