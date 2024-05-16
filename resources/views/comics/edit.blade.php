@extends('layouts.app')
@section('content')


    <div class="container">
        <h1>Inserisci i dati</h1>


        <form action="{{ route('comics.update', $comic) }}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelper"
                    placeholder="" value="{{ $comic->title }}"/>
            </div>

            <div class="mb-3">
                <label for="desription" class="form-label">Descrizione</label>
                <textarea class="form-control" name="description" id="description" rows="3">{{ $comic->description }}</textarea>
            </div>
            

            <div class="mb-3">
                <label for="image" class="form-label">Immagine</label>
                <input type="text" class="form-control" name="image" id="image" aria-describedby="helpId"
                    placeholder="" value="{{ $comic->thumb }}"/>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" name="price" id="price" aria-describedby="helpId"
                    placeholder="" value="{{ $comic->price }}"/>
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" name="series" id="series" aria-describedby="helpId"
                    placeholder="" value="{{ $comic->series }}"/>
            </div>

            <div class="mb-3">
                <label for="date" class="form-label">Data di vendita</label>
                <input type="text" class="form-control" name="date" id="date" aria-describedby="helpId"
                    placeholder="" value="{{ $comic->sale_date }}"/>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Tipologia</label>
                <input type="text" class="form-control" name="type" id="type" aria-describedby="helpId"
                    placeholder="" value="{{ $comic->type }}"/>
            </div>

            <button type="submit" class="btn btn-primary">Modifica</button>
        </form>
    </div>
@endsection
