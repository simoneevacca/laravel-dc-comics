@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Inserisci i dati</h1>
        @include('partials.validation-errors')


        <form action="{{ route('comics.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                    aria-describedby="titleHelper" placeholder="" value="{{ old('title') }}"/>

                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="desription" class="form-label ">Descrizione</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                    rows="3">{{ old('description') }}</textarea>

                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>


            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine</label>
                <input type="text" class="form-control  @error('thumb') is-invalid @enderror" name="thumb"
                    id="thumb" aria-describedby="helpId" placeholder="" value="{{ old('thumb') }}"/>

                @error('thumb')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="price" class="form-label ">Prezzo</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" name="price"
                    id="price" aria-describedby="helpId" placeholder="" value="{{ old('price') }}"/>

                @error('price')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="series" class="form-label ">Serie</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" name="series"
                    id="series" aria-describedby="helpId" placeholder="" value=" {{ old('series') }}"/>

                @error('series')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label ">Data di vendita</label>
                <input type="text" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date"
                    id="sale_date" aria-describedby="helpId" placeholder="" value="{{ old('sale_date') }}"/>

                @error('sale_date')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Tipologia</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" id="type"
                    aria-describedby="helpId" placeholder="" value="{{ old('type') }}"/>

                @error('type')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Aggiungi</button>
        </form>
    </div>
@endsection
