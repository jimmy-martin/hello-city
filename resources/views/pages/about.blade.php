@extends('app')

{{-- un commentaire avec blade --}}
{{-- Si le contenu est simple, on peut procéder comme ceci --}}

@section('title', 'About Us | ' . env('APP_NAME'))


@section('content')

    <p>Built with &hearts; by Jimmy MARTIN</p>

    <p><a href="/">Revenenir à la page d'accueil</a></p>

@stop
{{-- On peut aussi utiliser @stop pour marquer la fin d'une section --}}
