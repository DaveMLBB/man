{{-- resources/views/fornitori.blade.php --}}
@extends('layouts.app')

@section('title', 'Magazzino - ' . env('TITLE', 'Il Tuo Titolo Personalizzato'))

@section('header', 'Magazzino - ' . env('TITLE', 'Il Tuo Titolo Personalizzato'))

@section('header-buttons')
    <div class="header-buttons" style="display: flex; justify-content: flex-end; width: 100%;">
        <a href="{{ url('/magazzino/filtri') }}" class="header-button header-button-filtri">Filtri</a>
        <a href="{{ url('/magazzino/aggiungi') }}" class="header-button" style="margin-left: auto;">Aggiungi</a>
    </div>
@endsection

@section('content')
    <p>Questa è la sezione del magazzino.</p>

@endsection