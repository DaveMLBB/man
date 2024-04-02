{{-- resources/views/dashboard.blade.php --}}
@extends('layouts.app')

@section('title', 'Dashboard - ' . env('TITLE', 'Il Tuo Titolo Personalizzato'))

@section('header', 'Dashboard - ' . env('TITLE', 'Il Tuo Titolo Personalizzato'))

@section('content')
    <p>Benvenuto nella tua dashboard!</p>
@endsection
