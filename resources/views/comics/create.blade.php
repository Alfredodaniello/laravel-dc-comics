@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Cerca il tuo fumetto</h1>
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Titolo</label>
              <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb">
              </div>
              <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="price" name="price">
              </div>
              <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series">
              </div>
              <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title">
              </div>
              <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title">
              </div>
              <div class="mb-3">
                <label for="sale_date" class="form-label">Sale-date</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date">
              </div>
              <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control" id="type" name="type">
              </div>
              <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="description" name="description"></textarea>
                    <label for="description">Descrizione</label>
                  </div>
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection