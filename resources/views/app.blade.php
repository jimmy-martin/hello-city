<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Le 2eme parametre de @yield correspond à la valeur que je veux assigné par défaut, si le contenu de la section
        n'est pas précisé dans nos vues --}}
    <title>@yield('title', 'Hello City')</title>
</head>

<body>
    @yield('content')
    <footer>
        <p>
            &copy; Copyright {{ date('Y') }} &middot;
            <a href="/about-us">
                About US
            </a>
        </p>
    </footer>

</body>

</html>
