@extends('app')

{{-- un commentaire avec blade --}}
{{-- Si le contenu est simple, on peut procéder comme ceci --}}

@section('title', 'About Us | ' . config('app.name'))


@section('content')

    <img src="/images/me.jpeg" alt="Jimmy image">

    <p>Built with &hearts; by Jimmy MARTIN</p>

    <p><a href="{{ route('app_home') }}">Revenenir à la page d'accueil</a></p>

@stop
{{-- On peut aussi utiliser @stop pour marquer la fin d'une section --}}
