{{-- resources/views/fornitori.blade.php --}}
@extends('layouts.app')

@section('title', 'Fornitori - ' . env('TITLE', 'Il Tuo Titolo Personalizzato'))

@section('header', 'Fornitori - ' . env('TITLE', 'Il Tuo Titolo Personalizzato'))

@section('header-buttons')
    <div class="header-buttons" style="display: flex; justify-content: flex-end; width: 100%;">
        <a href="{{ url('/fornitori/filtri') }}" class="header-button header-button-filtri">Filtri</a>
        <a href="{{ url('/fornitori/nuovo') }}" class="header-button" style="margin-left: auto;">Nuovo Fornitore</a>
    </div>
@endsection

@section('content')
    <p>Questa è la sezione dei Fornitori.</p>

@endsection