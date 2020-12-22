@extends('layouts.main')

@section('content')

@if( ! empty( $lunghe ))
    <section class="type-home container">
        <h2>LE LUNGHE</h2>

        <div class="cards">
            @foreach($lunghe as $card)
                <div class="card">
                    <img src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}">
                    <h3>{{ $card['titolo'] }}</h3>
                    <a href="#">Vedi prodotto</a>
                </div>
            @endforeach
        </div>
    </section>
@endif    

@if( ! empty( $corte ))
    <section class="type-home container">
        <h2>LE CORTE</h2>

        <div class="cards">
            @foreach($corte as $card)
                <div class="card">
                    <img src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}">
                    <h3>{{ $card['titolo'] }}</h3>
                    <a href="#">Vedi prodotto</a>
                </div>
            @endforeach
        </div>
    </section>
@endif

@if( ! empty( $cortissime ))
    <section class="type-home container">
        <h2>LE CORTISSIME</h2>

        <div class="cards">
            @foreach($cortissime as $card)
                <div class="card">
                    <img src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}">
                    <h3>{{ $card['titolo'] }}</h3>
                    <a href="#">Vedi prodotto</a>
                </div>
            @endforeach
        </div>
    </section>
@endif

@endsection