@extends('layouts.app')
@section('content')


<div class="container">
    <div class="row">
        @forelse ($movies as $movie)
        <div class="col">
            <h1>{{$movie->title}}</h1>
            <h2>{{$movie->original_title}}</h2>
        </div>
        @empty


        @endforelse
    </div>
</div>
@endsection