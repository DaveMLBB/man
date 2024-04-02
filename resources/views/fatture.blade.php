{{-- resources/views/fatture.blade.php --}}
@extends('layouts.app')

@section('title', 'Fatture - ' . env('TITLE', 'Il Tuo Titolo Personalizzato'))

@section('header', 'Fatture - ' . env('TITLE', 'Il Tuo Titolo Personalizzato'))

@section('header-buttons')
    <div class="header-buttons" style="display: flex; justify-content: flex-end; width: 100%;">
        <a href="{{ url('/fatture/filtri') }}" class="header-button header-button-filtri">Filtri</a>
        <a href="{{ url('/fatture/aggiungi') }}" class="header-button" style="margin-left: auto;">Aggiungi</a>
    </div>
@endsection

@section('content')
    <p>Questa è la sezione delle fatture.</p>

@endsection