@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="d-flex flex-wrap justify-content-between gap-5">
            @foreach ($movies as $movie)
                <div class="card col-12 col-md-6 col-lg-2">
                    <img src="{{ $movie->image }}" alt="movie image">
                    <div class="px-3 mt-3">
                        <p><span>Title: </span>{{ $movie->original_title }}</p>
                        <p><span>Rating: </span>{{ floor($movie->vote) }}</p>
                        <p><span>Nationality: </span>{{ $movie->nationality }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
