@extends('layouts.main')

@section('title', 'Movie')

@section('main-content')
    <div class="container">
        <div class="row p-5 justify-content-center">
            @forelse ($movies as $movie)
                <div class="card col-4 m-2" style="width: 18rem;">
                    <div class="cover_card">
                        <img src="{{ $movie->cover }}" class="card-img-top" alt="{{ $movie->title }}">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <p class="card-text">Original title:<br> <em>{{ $movie->original_title }}</em></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Nationality: {{ $movie->nationality }}</li>
                        <li class="list-group-item">Vote: {{ $movie->vote }}</li>
                        <li class="list-group-item">Date: {{ $movie->date }}</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">More details</a>
                    </div>
                </div>
            @empty
                <div>
                    <h2>There are no movies available. Try later.</h2>
                </div>
            @endforelse
        </div>
    </div>
@endsection
