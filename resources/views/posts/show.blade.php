<x-layouts.main :title="$post->title">
    <section>
        <div class="px-4 py-24 mx-auto sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center">
                <h1
                    class="text-3xl font-extrabold text-transparent sm:text-6xl bg-clip-text bg-gradient-to-r from-green-300 via-blue-500 to-purple-600"
                >
                    {{ $post->title }}
                </h1>
            </div>
        </div>
    </section>

    <section>
        <div class="prose prose-blue">
            {!! $post->formatted_content !!}
        </div>
    </section>
</x-layouts.main>
