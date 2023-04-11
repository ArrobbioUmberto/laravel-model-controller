@extends('layouts.app')
@section('content')


<div class="container py-5">
    <div class="row">
        @forelse ($movies as $movie)
        <div class="col-5 py-3">
            <h1>{{$movie->title}}</h1>
            <h3>Titolo originale: {{$movie->original_title}}</h3>
            <p>Data d'uscita: {{$movie->date}}</p>
            <p>Voto: {{$movie->vote}}</p>
            <span>Nazionalita': {{$movie-> nationality}}</span>
        </div>
        @empty


        @endforelse
    </div>
</div>
@endsection