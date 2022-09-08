@extends('layouts.main')

@section('title', 'Home')

@section('main-content')
    <div class="py-4">
        <ul>
            @foreach ($movies as $movie)
                <li>
                    {{ $movie->id }} - {{ $movie->title }}
                </li>
            @endforeach
        </ul>
    </div>
@endsection