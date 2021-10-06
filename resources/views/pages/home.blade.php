@extends('app')

{{-- Si le contenu est simple, on peut procéder comme ceci --}}

@section('content')

    <img class="mt-12 rounded shadow-2xl" src="{{ asset('images/Flag_of_France.svg.png') }}" alt="France flag">

    <h1 class="mt-5 text-3xl sm:text-5xl font-semibold text-indigo-600">Hello from France !</h1>

    <p class="text-lg text-gray-800">It's currently {{ date('h:i A') }}.</p>

@endsection
