@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-start g-4">
            @foreach ($movies as $movie)
                <div class="col col-12 col-md-5 col-lg-3 ">
                    <div class="card p-0">
                        <img src="{{ $movie->image }}" class="card-img-top p-0" alt="...">
                        <div class="card-body ms_card-body">
                            <p class="card-text"><span>Title: </span>{{ $movie->original_title }}</p>
                            <p class="card-text"><span>Rating: </span>{{ floor($movie->vote) }}</p>
                            <p class="card-text"><span>Nationality: </span>{{ $movie->nationality }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
