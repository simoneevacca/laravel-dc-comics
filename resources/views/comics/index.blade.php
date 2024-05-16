@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="my-5">Tutti i fumetti</h1>
        <a href="{{ route('comics.create') }}" class="btn btn-primary mb-4" >
            Add new
        </a>

        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Titolo</th>
                        <th scope="col">Prezzo</th>
                        <th scope="col">Serie</th>
                        <th scope="col">Data di vendita</th>
                        <th scope="col">Tipologia</th>
                        <th>Opzioni</th>
                    </tr>
                </thead>
                <tbody>

                    @forelse ($comics as $comic)
                        <tr class="">
                            <td scope="row">{{ $comic->id }}</td>
                            <td>{{ $comic->title }}</td>
                            <td>{{ $comic->price }}</td>
                            <td>{{ $comic->series }}</td>
                            <td>{{ $comic->sale_date }}</td>
                            <td>{{ $comic->type }}</td>
                            <td>
                                <a href="{{ route('comics.show', $comic) }}">view</a>
                                <a href="{{ route('comics.edit', $comic) }}">edit</a>
                                <a href="{{ route('comics.show', $comic) }}">delete</a>
                            </td>


                        </tr>
                    @empty
                        <tr class="">
                            <td scope="row">No record</td>
                            <td>No record</td>
                            <td>No record</td>
                            <td>No record</td>
                            <td>No record</td>
                            <td>No record</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{ $comics->links('pagination::bootstrap-5') }}
    </div>
@endsection
