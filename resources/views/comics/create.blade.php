@extends('layouts.app')

@section('content')
    <div class="container">
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <h1 class="text-center">Crea il tuo fumetto</h1>
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Titolo</label>
              <input type="text" class="form-control" id="title" name="title" value="{{ old('title')}}">
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb value="{{ old('thumb')}}>
              </div>
              <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ old('price')}}">
              </div>
              <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series" value="{{ old('series')}}">
              </div>
              <div class="mb-3">
                <label for="sale_date" class="form-label">Sale-date</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ old('sale_date')}}">
              </div>
              <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control" id="type" name="type" value="{{ old('type')}}">
              </div>
              <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="description" name="description" value="{{ old('description')}}"></textarea>
                    <label for="description">Descrizione</label>
                  </div>
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection