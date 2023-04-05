@extends('layouts.app')

@section('content')

<div>
    <div class="container">
    </div>
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
            <div class="card" style="width: 18rem;">
                <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $comic['title'] }}</h5>
                    <p class="card-text">{{ $comic['description'] }}</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>


            @endforeach
        </div>
    </div>
</div>

@endsection