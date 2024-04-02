{{-- resources/views/fornitori.blade.php --}}
@extends('layouts.app')

@section('title', 'Preventivi - ' . env('TITLE', 'Il Tuo Titolo Personalizzato'))

@section('header', 'Preventivi - ' . env('TITLE', 'Il Tuo Titolo Personalizzato'))

@section('header-buttons')
    <div class="header-buttons" style="display: flex; justify-content: flex-end; width: 100%;">
        <a href="{{ url('/preventivi/filtri') }}" class="header-button header-button-filtri">Filtri</a>
        <a href="{{ url('/preventivi/nuovo') }}" class="header-button" style="margin-left: auto;">Nuovo Preventivo</a>
    </div>
@endsection

@section('content')
    <p>Questa è la sezione dei Fornitori.</p>

@endsection