@extends('layouts.app')

@section('page-title', 'Comics')

@section('main-content')

    <div class="row g-3">
        @forelse ($comics as $comic)
            <div class="col-3">

                <div class="card h-100" style="width: 18rem;">
                    <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $comic['title'] }}</h5>
                        <p class="card-text">{{ $comic['description'] }}</p>
                    </div>
                </div>
            </div>

        @empty
            <h3>Nessun fumetto trovato.</h3>
        @endforelse

    </div>
@endsection
