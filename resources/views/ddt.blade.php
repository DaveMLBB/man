{{-- resources/views/ddt.blade.php --}}
@extends('layouts.app')

@section('title', 'DDT - ' . env('TITLE', 'Il Tuo Titolo Personalizzato'))

@section('header', 'DDT - ' . env('TITLE', 'Il Tuo Titolo Personalizzato'))

@section('header-buttons')
    <div class="header-buttons" style="display: flex; justify-content: flex-end; width: 100%;">
        <a href="{{ url('/ddt/filtri') }}" class="header-button header-button-filtri">Filtri</a>
        <a href="{{ url('/ddt/nuovo') }}" class="header-button" style="margin-left: auto;">Nuovo DDT</a>
    </div>
@endsection

@section('content')
    <p>Questa è la sezione dei Fornitori.</p>

@endsection