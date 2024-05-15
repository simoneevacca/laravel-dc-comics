@extends('layouts.app')
@section('content')
<div class="container">
    <h1 class="my-5">{{ $comic->title }}</h1>
    <div class="d-flex ">
        <img width="1500" src="{{ $comic->thumb }}" alt="">

        <div class="px-4">
            <strong>{{ $comic->series }}</strong>
            <p>{{ $comic->description }}</p>
            <strong>Prezzo: </strong>{{ $comic->price}} <br>
            <strong>Tipologia: </strong>{{ $comic->type }}
        </div>
    </div>
</div>
@endsection
    