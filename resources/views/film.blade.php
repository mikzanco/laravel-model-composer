@extends('layout.main')

@section('content')
    <h1>Elenco film</h1>

    <ul>
        @foreach ($movies as  $movie)

            <li>{{ $movie->title }}</li>
        @endforeach
    </ul>

@endsection
