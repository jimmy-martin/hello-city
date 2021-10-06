<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Le 2eme parametre de @yield correspond à la valeur que je veux assigné par défaut, si le contenu de la section
        n'est pas précisé dans nos vues --}}

    <title>@yield('title', config('app.name'))</title>
</head>

<body>
    @yield('content')

    <footer>
        <p>
            &copy; Copyright {{ date('Y') }}

            @if (!Route::is('app_about'))
                &middot;
                <a href="{{ route('app_about') }}">
                    About US
                </a>
            @endif

        </p>
    </footer>

</body>

</html>
