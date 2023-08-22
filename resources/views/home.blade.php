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
                        <p class="card-text"><strong>Nazionalità : </strong> {{ $movie->nationality }}</p>
                        <p class="card-text"><strong>Data di uscita : </strong> {{ $movie->date }}</p>
                        <p class="card-text"><strong>Voto : </strong> {{ $movie->vote }}</p>
                        <a href="#" class="card-link">Scopri di più</a>
                    </div>
              </div>
            </div>
        @endforeach
    </div>
</div>


@endsection