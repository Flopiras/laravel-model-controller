@extends('layouts.main')

@section('title', 'Home')

@section('main')

<div class="container mt-4">
    <div class="row row-cols-4">
        @foreach($movies as $movie)
            <div class="col">

                {{-- cards --}}
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">{{ $movie->original_title }}</h6>
                        <p class="card-text"><strong>Nationality : </strong> {{ $movie->nationality }}</p>
                        <p class="card-text"><strong>Date : </strong> {{ $movie->date }}</p>
                        <p class="card-text"><strong>Vote : </strong> {{ $movie->vote }}</p>
                        <a href="#" class="card-link">Movie link</a>
                    </div>
              </div>
            </div>
        @endforeach
    </div>
</div>


@endsection