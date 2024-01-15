@extends('layouts.app')

@section('content')
    <div class="d-flex flex-wrap">
        @foreach ($movies as $movie)
            <div class="card col-12 col-md-6 col-lg-3">
                <img src="{{ $movie->image}}" alt="">
                <p>{{ $movie->title }}</p>
                <p>{{ $movie->original_title }}</p>
            </div>
        @endforeach
    </div>
@endsection
