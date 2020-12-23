@extends('layouts.main')

@section('content')

<section class="product-detail">
    <div class="container">

        {{-- Pagina successiva/precedente --}}
        <div class="navigation">
            @if($id > 0)
                <a href="{{ route('product', $id - 1) }}">&lt; Prev</a>
            @endif

            @if($id < $lenght)
                <a href="{{ route('product', $id + 1) }}">Next &gt;</a>
            @endif
        </div>

        <div class="hero">
            <h1>{{ $product['titolo'] }}</h1>
            <img src="{{ $product['src-h'] }}" alt="{{ $product['titolo'] }}">
            <img src="{{ $product['src-p'] }}" alt="{{ $product['titolo'] }}">
        </div>

        <div class="description">
            <p>{!! $product['descrizione'] !!}</p>
        </div>
    </div>
</section>

@endsection