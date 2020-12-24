{{-- 
    HEADER 
--}}
<header>
    <a href="{{ route('home') }}" class="brand">
       <img src="{{ asset('img/logo.png') }}" alt="Logo Molisana">
    </a>

    {{-- Links --}}
    <nav class="links">
        <li>
            <a href="{{ route('home') }}">Home</a>
        </li>
        <li>
            <a href="product/1">Prodotti</a>
        </li>
        <li>
            <a href="{{ route('news') }}">News</a>
        </li>
    </nav>
</header>