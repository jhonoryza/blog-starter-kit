@props(['title' => null])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
    <title>@isset($title) {{ $title }} &mdash; @endisset{{ config('app.name') }}</title>
</head>
<body class="antialiased bg-white font-sans">
    <nav class="flex items-center justify-between max-w-3xl p-4 mx-auto">
        <span class="inline-flex items-center justify-center w-10 h-10 bg-gray-100 rounded-lg">
            🚀
        </span>

        <ul class="flex items-center space-x-2 text-sm font-medium text-gray-700">
            <li class="hidden lg:block">
                <a class="px-3 py-2 rounded-lg" href="/">Home</a>
            </li>

            <li>
                <a class="px-3 py-2 rounded-lg" href="">Archive</a>
            </li>

            <li>
                <a class="inline-flex items-center px-3 py-2 rounded-lg text-gray-400" href="https://github.com/laravel-filament" target="_blank">
                    GitHub
                </a>
            </li>
        </ul>
    </nav>
</body>
</html>
