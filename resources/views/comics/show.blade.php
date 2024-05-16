@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="d-flex my-5 justify-content-between">

            <h1>{{ $comic->title }}</h1>
            <div class="d-flex align-items-center gap-1">
                <a href="{{ route('comics.index') }}" class="btn btn-secondary d-flex align-items-center gap-3">
                    <i class="fa-solid fa-left-long fa-lg"></i>
                    <h5>Back</h5>
                </a>
                <a href="{{ route('comics.edit', $comic) }}" class="btn btn-warning d-flex align-items-center gap-1" >
                    <i class="fa-solid fa-file-pen"></i>
                    <h5>Edit</h5>
                </a>
            </div>
        </div>
        <div class="d-flex ">
            <img width="1500" src="{{ $comic->thumb }}" alt="">

            <div class="px-4">
                <strong>{{ $comic->series }}</strong>
                <p>{{ $comic->description }}</p>
                <strong>Prezzo: </strong>{{ $comic->price }} <br>
                <strong>Tipologia: </strong>{{ $comic->type }}
            </div>
        </div>
    </div>
@endsection
