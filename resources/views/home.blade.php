@extends('layouts.main')

@section('content')

  <div class="back-home">
    {{-- Sezione lunghe --}}
    @include('partials.cards', ['cards' => $lunghe, 'title' => 'LE LUNGHE'])

    {{-- Sezione corte --}}
    @include('partials.cards', ['cards' => $corte, 'title' => 'LE CORTE'])

    {{-- Sezione cortissime --}}
    @include('partials.cards', ['cards' => $cortissime, 'title' => 'LE CORTISSIME'])
  </div>

@endsection 