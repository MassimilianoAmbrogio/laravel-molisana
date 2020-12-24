@extends('layouts.main')

@section('content')

{{-- Sezione lunghe --}}
@include('partials.cards', ['cards' => $lunghe, 'title' => 'LE LUNGHE'])

{{-- Sezione corte --}}
@include('partials.cards', ['cards' => $corte, 'title' => 'LE CORTE'])

{{-- Sezione cortissime --}}
@include('partials.cards', ['cards' => $cortissime, 'title' => 'LE CORTISSIME'])

@endsection 