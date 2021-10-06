@extends('app')

{{-- Si le contenu est simple, on peut procéder comme ceci --}}

@section('content')

    <img src="/images/Flag_of_France.svg.png" alt="France flag">

    <h1>Hello from France !</h1>

    <p>It's currently {{ date('h:i A') }}.</p>

@endsection
