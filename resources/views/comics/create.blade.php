@extends('layouts.app')

@section('page-title', 'Comics')

@section('main-content')
<h1>
    Crea Comics
</h1>

<form action="{{ route('comics.store') }}" method="POST">
    @csrf 

    <div class="mb-3">
        <label for="title" class="form-label">Titolo <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="title" name="title" required maxlength="128" placeholder="Inserisci il titolo...">
    </div>

    <div class="mb-3">
        <label for="thumb" class="form-label">Copertina</label>
        <input type="text" class="form-control" id="thumb" name="thumb" maxlength="2048" placeholder="Inserisci la copertina...">
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Prezzo <span class="text-danger">*</span></label>
        <input type="number" class="form-control" id="price" name="price" step="0.01" max="999.99" required placeholder="Inserisci il prezzo...">
    </div>

    <div class="mb-3">
        <label for="series" class="form-label">Serie <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="series" name="series" maxlength="64" required placeholder="Inserisci la serie...">
    </div>

    <div class="mb-3">
        <label for="sale_date" class="form-label">Data di vendita</label>
        <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder="Inserisci la data di vendita...">
    </div>

    <div class="mb-3">
        <label for="type" class="form-label">Tipo <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="type" name="type" required placeholder="Inserisci la tipologia...">
    </div>

    <div class="mb-3">
        <label for="artists" class="form-label">Artisti</label>
        <input type="text" class="form-control" aria-descridebdy="artists-help" id="artists" name="artists" placeholder="Inserisci gli artisti...">
        <div id="artists-help" class="form-text">
            Inserisci i nomi degli artisti separati da virgole
        </div>
    </div>

    <div class="mb-3">
        <label for="writers" class="form-label">Scrittori</label>
        <input type="text" class="form-control" aria-descridebdy="writers-help" id="writers" name="writers" placeholder="Inserisci gli scrittori...">
        <div id="writers-help" class="form-text">
            Inserisci i nomi degli scrittori separati da virgole
        </div>
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Descrizione <span class="text-danger">*</span></label>
        <textarea class="form-control" id="description" name="description" rows="3" required placeholder="Inserisci la descrizione..."></textarea>
    </div>

    <div class="mb-4">
        <button type="submit" class="btn btn-success w-100">
            + Aggiungi
        </button>
    </div>
</form>
@endsection
