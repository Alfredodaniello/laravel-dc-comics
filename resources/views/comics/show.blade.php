@extends('layouts.app')

@section('content')
    <h1 class="text-center">{{$comic->title}}</h1>
    <div class="card my-card my-3">
        <div class="card-body">
            <div>
                <img src={{$comic->thumb}} alt="">
            </div>
            <div class="title">{{$comic->title}}</div>
            <div class="description my-3">{{$comic->description}}</div>
            <h5>{{$comic->series}}</h5>
            <h6>Prezzo: {{$comic->price}}</h6>
            <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}">Modifica</a>
        </div>
    </div>
@endsection