@extends('layouts.app')

@section('page-title', 'Comics')

@section('main-content')
<h1 class="text-center mb-3">
    Comics
</h1>

<div class="mb-4">
    <a href="{{ route('comics.create') }}" class="btn btn-success w-100">
        + Aggiungi
    </a>
</div>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Serie</th>
            <th scope="col">Tipo</th>
            <th scope="col">Prezzo</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($comics as $comic)
            <tr>
                <th scope="row">{{ $comic->id }}</th>
                <td>{{ $comic->title }}</td>
                <td>{{ $comic->series }}</td>
                <td>{{ $comic->type }}</td>
                <td>{{ number_format($comic->price, 2, ',', '.') }}</td>
                <td>
                    <a href="{{ route('comics.show', ['comic' => $comic->id]) }}" class="btn btn-primary">
                        Guarda!
                    </a>
                    <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}" class="btn btn-warning">
                        Modifica
                    </a>
                </td>
            </tr>
        @endforeach
        
    </tbody>
</table>
@endsection
