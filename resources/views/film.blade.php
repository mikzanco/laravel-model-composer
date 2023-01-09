@extends('layout.main')

@section('content')
    <h1>Elenco film</h1>

    <div class="row">
        @foreach ($movies as  $movie)


            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">{{ $movie->title }}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">{{ $movie->original_title }}</h6>
                  <p class="card-text">{{ $movie->date}}</p>
                  <p class="card-text">{{ $movie->vote}}</p>
                  <p class="card-text">{{ $movie->nationality}}</p>
                </div>
              </div>
        @endforeach
    </div>

@endsection
