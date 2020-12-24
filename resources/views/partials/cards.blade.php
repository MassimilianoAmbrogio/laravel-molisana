@if( ! empty($cards))
    <section class="type-home container">
        <h2>{{$title}}</h2>

        <div class="cards">
            @foreach($cards as $card)
                <div class="card">
                    <a href="{{ route('product', $card['id']) }}"> 
                        <img src="{{ $card['src'] }}" alt="{{ $card['titolo'] }}">
                    </a>
                    {{-- <h3>{{ $card['titolo'] }}</h3> --}}
                </div>
            @endforeach
        </div>
    </section>
@endif