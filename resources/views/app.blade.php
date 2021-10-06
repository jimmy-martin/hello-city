{{-- TODO: Styliser avec TailwindCSS --}}
{{-- Leçon 19/26 --}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    {{-- Le 2eme parametre de @yield correspond à la valeur que je veux assigné par défaut, si le contenu de la section
        n'est pas précisé dans nos vues --}}

    <title>@yield('title', config('app.name'))</title>
</head>

<body class="py-6 flex flex-col justify-between items-center min-h-screen">

    <main role="main" class="flex flex-col justify-center items-center">
        @yield('content')
    </main>

    <footer>
        <p class="text-gray-400">
            &copy; Copyright {{ date('Y') }}

            @if (!Route::is('app_about'))
                &middot;
                <a class="text-indigo-500 hover:text-indigo-600 underline" href="{{ route('app_about') }}">
                    About US
                </a>
            @endif

        </p>
    </footer>

</body>

</html>
