{{-- resources/views/articoli.blade.php --}}
@extends('layouts.app')

@section('title', 'Articoli - ' . env('TITLE', 'Il Tuo Titolo Personalizzato'))

@section('header', 'Articoli - ' . env('TITLE', 'Il Tuo Titolo Personalizzato'))

@section('header-buttons')
    <div class="header-buttons" style="display: flex; justify-content: flex-end; width: 100%;">
        <a href="{{ url('/articoli/filtri') }}" class="header-button header-button-filtri">Filtri</a>
        <a href="{{ url('/articoli/aggiungi') }}" class="header-button" style="margin-left: auto;">Aggiungi</a>
    </div>
@endsection

@section('content')
    <p>Questa è la sezione degli articoli.</p>

@endsection