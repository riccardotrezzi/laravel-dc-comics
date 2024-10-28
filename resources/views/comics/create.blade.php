@extends('layouts.app')

@section('page-title', 'Comics')

@section('main-content')
<h1>
    Crea Comics
</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach 
        </ul>
    </div>

<form action="{{ route('comics.store') }}" method="POST">
    @csrf 

    <div class="mb-3">
        <label for="title" class="form-label">Titolo <span class="text-danger">*</span></label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required maxlength="128" placeholder="Inserisci il titolo...">

        @error('title')
            <div class="alert alert-danger">
                ERRORE TITOLO: {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="thumb" class="form-label">Copertina</label>
        <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" maxlength="2048" placeholder="Inserisci la copertina...">
        
        @error('title')
            <div class="alert alert-danger">
                ERRORE IMMAGINE: {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Prezzo <span class="text-danger">*</span></label>
        <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" step="0.01" max="999.99" required placeholder="Inserisci il prezzo...">

        @error('title')
            <div class="alert alert-danger">
                ERRORE PREZZO: {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="series" class="form-label">Serie <span class="text-danger">*</span></label>
        <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" maxlength="64" required placeholder="Inserisci la serie...">
        
        @error('title')
            <div class="alert alert-danger">
                ERRORE SERIES: {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="sale_date" class="form-label">Data di vendita</label>
        <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" placeholder="Inserisci la data di vendita...">

        @error('title')
            <div class="alert alert-danger">
                ERRORE DATA DI VENDITA: {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="type" class="form-label">Tipo <span class="text-danger">*</span></label>
        <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" required placeholder="Inserisci la tipologia...">

        @error('title')
            <div class="alert alert-danger">
                ERRORE TIPO: {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="artists" class="form-label">Artisti</label>
        <input type="text" class="form-control @error('artists') is-invalid @enderror" aria-descridebdy="artists-help" id="artists" name="artists" placeholder="Inserisci gli artisti...">
        <div id="artists-help" class="form-text">
            Inserisci i nomi degli artisti separati da virgole
        </div>

        @error('title')
            <div class="alert alert-danger">
                ERRORE ARTISTI: {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="writers" class="form-label">Scrittori</label>
        <input type="text" class="form-control @error('writers') is-invalid @enderror" aria-descridebdy="writers-help" id="writers" name="writers" placeholder="Inserisci gli scrittori...">
        <div id="writers-help" class="form-text">
            Inserisci i nomi degli scrittori separati da virgole
        </div>

        @error('title')
            <div class="alert alert-danger">
                ERRORE SCRITTORI: {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Descrizione <span class="text-danger">*</span></label>
        <textarea class="form-control @error('description') is-invalid @enderror" id="description" maxlength="4096" name="description" rows="3" required placeholder="Inserisci la descrizione..."></textarea>

        @error('title')
            <div class="alert alert-danger">
                ERRORE DESCRIZIONE: {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-4">
        <button type="submit" class="btn btn-success w-100">
            + Aggiungi
        </button>
    </div>
</form>
@endsection
