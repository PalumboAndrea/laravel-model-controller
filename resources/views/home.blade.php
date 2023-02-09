@extends('layouts.app')

@section('main-content')

<div class="container cards-container">
    <div class="row g-4">
        @foreach ($movies as $movie)
        <div class="col-6 col-md-4 col-lg-3">
            <div class="my-card p-1">
                <h3>
                    Title: {{ $movie->title }}
                </h3>
                <h4>
                    Original title: {{ $movie->original_title }}
                </h4>
                <p>
                    Language: {{ $movie->nationality }}
                </p>
                <span>
                    Publication date {{ $movie->date }}
                </span>
                <p>
                    Vote: {{ $movie->vote }}
                </p>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection


