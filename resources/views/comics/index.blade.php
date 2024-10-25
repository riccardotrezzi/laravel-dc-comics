@extends('layouts.app')

@section('page-title', 'Comics')

@section('main-content')
<h1>
    Comics
</h1>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Serie</th>
            <th scope="col">Tipo</th>
            <th scope="col">Prezzo</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($comic as $comics)
            <tr>
                <th scope="row">{{$comic->id}}</th>
                <td>{{$comic->title}}</td>
                <td>{{$comic->series}}</td>
                <td>{{$comic->type}}</td>
                <td>{{number_format($comic->price, 2, ',', '.')}}</td>
            </tr>
        @endforeach
        
    </tbody>
</table>
@endsection
