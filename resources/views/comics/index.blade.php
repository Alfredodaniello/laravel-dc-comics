@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
            <div class="col-3">
                <div class="card my-3">
                    <div class="card-body">
                        <div>
                            <img src={{$comic->thumb}} alt="">
                        </div>
                        <div>{{$comic->title}}</div>
                        <div class="description my-2">{{$comic->description}}</div>
                        <h5>{{$comic->series}}</h5>
                        <h6>Prezzo: {{$comic->price}}</h6>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection