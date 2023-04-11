@extends('layouts.app')
@section('content')


<div class="container py-5">
    <div class="row gy-3 justify-content-center">
        @forelse ($movies as $movie)
        <div class="card col-5 m-3 text-bg-primary">
            <div class="card-body">
                <h5 class="card-title">{{$movie->title}}</h5>
                <h5 class="card-title">{{$movie->original_title}}</h5>
                <p class="card-text">Voto: {{$movie->vote}}</p>
                <p class="card-text">Nazionalita': {{$movie->nationality}}</p>
                <p class="card-text"><small class="text-body-secondary">Data d'uscita: {{$movie->date}}</small></p>
            </div>
        </div>
        @empty


        @endforelse
    </div>
</div>
@endsection