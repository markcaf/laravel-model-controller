@extends('layouts.main')

@section('title', 'Home')

@section('main-content')
    <div class="text-center my-4">
        <h1>Welcome in Laravel Movies</h1>
        <p class="fs-5"><a href="{{ route('movies') }}">Click here</a> to start browsing</p>
    </div>

    <img src="https://www.itl.cat/pngfile/big/46-465731_streaming-movies.jpg" alt="" class="img-fluid">
@endsection
