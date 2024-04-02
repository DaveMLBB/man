{{-- resources/views/clienti.blade.php --}}
@extends('layouts.app')

@section('title', 'Clienti - ' . env('TITLE', 'Il Tuo Titolo Personalizzato'))

@section('header', 'Clienti - ' . env('TITLE', 'Il Tuo Titolo Personalizzato'))

@section('header-buttons')
    <div class="header-buttons" style="display: flex; justify-content: flex-end; width: 100%;">
        <a href="{{ url('/clienti/filtri') }}" class="header-button header-button-filtri">Filtri</a>
        <a href="{{ url('/clienti/nuovo') }}" class="header-button" style="margin-left: auto;">Nuovo Cliente</a>
    </div>
@endsection

@section('content')
    <p>Questa è la sezione dei clienti.</p>
@endsection