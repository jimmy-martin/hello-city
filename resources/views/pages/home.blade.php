@extends('app')

{{-- Si le contenu est simple, on peut procéder comme ceci --}}

@section('content')

    <h1>Hello from Quebec !</h1>

    <p>It's currently {{ date('h:i A') }}.</p>

@endsection
