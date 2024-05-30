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
                        <div class="title">{{$comic->title}}</div>
                        <div class="description my-3">{{$comic->description}}</div>
                        <h5>{{$comic->series}}</h5>
                        <h6>Prezzo: {{$comic->price}}</h6>
                        <a href="comics/{{$comic->id}}">Dettagli</a>
                        <div>
                            <form action="{{ route('comics.destroy', ['comic' => $comic ->id])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Elimina</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection