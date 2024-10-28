@extends('layouts.app')

@section('page-title', $comic->title)

@section('main-content')
<h1>
    {{$comic->title}}
</h1>

<div class="card">
    <div class="card-body">
        <ul>
            <li>
                Prezzo: {{number_format($comic->price, 2, ',', '.')}}
            </li>
            <li>
                Series: {{$comic->series}}
            </li>
            <li>
                Data di Vendita: {{$comic->sale_date}}
            </li>
            <li>
                Tipo: {{$comic->type}}
            </li>
            <li>
                Artisti:
                <ul> 
                    @php 
                        $decodedArtists = json_decode($comic->artists);
                    @endphp
                    @foreach ($decodedArtists as $artists)
                        <li>
                            {{
                                $artists
                            }}
                        </li>
                    @endforeach
                </ul>
            </li>
            <li>
                Scrittori: 

                <ul>
                    @php 
                            $explodedWriters = explode('|', $comic->writers)
                    @endphp
                    @foreach ($explodedWriters as $writer)
                            <li>
                                {{
                                    $writer
                                }}
                            </li>
                    @endforeach
                </ul>
            </li>
            
        </ul>

        <p>
            {{ $comic->description }}
        </p>
    </div>
    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="card-img-bottom">
</div>
@endsection
