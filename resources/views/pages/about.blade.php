@extends('app')

{{-- un commentaire avec blade --}}
{{-- Si le contenu est simple, on peut procéder comme ceci --}}

@section('title', 'About Us | ' . config('app.name'))


@section('content')

    {{-- On n'est pas obligé de rajouter le '/' avant le chemin des assets --}}
    <img class="my-12 rounded-full shadow-xl" src="{{ asset('images/me.jpeg') }}" alt="Jimmy image">

    <h2 class="mb-5 text-gray-700">
        Built with <span class="text-red-600">&hearts;</span> by Jimmy MARTIN
    </h2>

    <p><a class="text-indigo-500 hover:text-indigo-600 underline" href="{{ route('app_home') }}">Revenir à la page d'accueil</a></p>

@stop
{{-- On peut aussi utiliser @stop pour marquer la fin d'une section --}}
