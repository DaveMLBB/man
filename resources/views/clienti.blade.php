{{-- resources/views/clienti.blade.php --}}
@extends('layouts.app')

@section('title', 'Clienti - ' . env('TITLE', 'Il Tuo Titolo Personalizzato'))

@section('header', 'Clienti - ' . env('TITLE', 'Il Tuo Titolo Personalizzato'))

@section('header-buttons')
<div class="header-buttons" style="display: flex; justify-content: flex-end; width: 100%;">
    <div class="search-bars" style="display: flex; justify-content: flex-end; align-items: center; gap: 20px; padding: 20px; border-radius: 8px; margin-bottom: 20px;">
        <!-- Barra di ricerca cliente -->
        <div style="flex-grow: 1; min-width: 0;">
            <form action="{{ route('clienti.search') }}" method="GET" class="d-flex align-items-center" style="gap: 10px;">
                <input type="text" name="ragione_sociale" placeholder="Cerca per cliente..." class="form-control" style="flex-grow: 1; height: 25px; padding: 10px;">
                <button type="submit" class="btn" style="height: 45px; padding: 10px 15px; background-color: #f97316; border-color: #f97316; color: white;">Cerca Cliente</button>
            </form>
        </div>

        <!-- Barra di ricerca tipologia -->
        <div style="flex-grow: 1; min-width: 0;">
            <form action="{{ route('clienti.search') }}" method="GET" class="d-flex align-items-center" style="gap: 10px;">
                <select name="tipologia" class="form-control" style="flex-grow: 1; height: 45px; padding: 10px;">
                    <option value="">Seleziona Tipologia</option>
                    <option value="associazioneNoProfit">Associazione no profit</option>
                    <option value="azienda">Privato</option>
                    <option value="professionista">Professionista</option>
                    <option value="pubblicaAmministrazione">Pubblica amministrazione</option>
                    <option value="societa">Società</option>
                </select>
                <button type="submit" class="btn" style="height: 45px; padding: 10px 15px; background-color: #f97316; border-color: #f97316; color: white;">Cerca per Tipologia</button>
            </form>
        </div>
    </div>
    <!-- NUOVO CLIENTE -->
    <a style= "margin-top: 20px; max-height: 35px;" href="{{ url('/clienti/nuovo') }}" class="header-button" style="margin: auto;">Nuovo Cliente</a>
</div>
@endsection

@section('content')
<style>
    .container {
        max-width: 1200px;
        margin: auto;
        padding-top: 2rem;
    }

    .table {
        width: 100%;
        margin-top: 200px;
        border-collapse: collapse;
    }

    .table, .table th, .table td {
        border: 1px solid #ddd;
    }

    .table th, .table td {
        text-align: left;
        padding: 8px;
    }

    .table th {
        background-color: #f2f2f2;
        color: #333;
    }

    .table tbody tr:nth-child(odd) {
        background-color: #f9f9f9;
    }

    .table tbody tr:hover {
        background-color: #f1f1f1;
    }

    .header-button {
        padding: 6px 12px;
        text-decoration: none;
        color: white;
        background-color: #007bff;
        border-radius: 5px;
        margin-left: 10px;
    }

    .header-button-filtri {
        background-color: #f0ad4e;
    }

    .header-button:hover {
        opacity: 0.85;
    }

</style>
<div class="container mt-4">
    <h2>Elenco Clienti</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Ragione Sociale</th>
                <th>Nazione</th>
                <th>Tipologia</th>
                <th>Partita IVA</th>
                <th>Codice Fiscale</th>
                <th>Email</th>
                <th>Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clienti as $cliente)
                <tr>
                    <td>{{ $cliente->ragione_sociale }}</td>
                    <td>{{ $cliente->nazione }}</td>
                    <td>{{ $cliente->tipologia }}</td>
                    <td>{{ $cliente->partita_iva }}</td>
                    <td>{{ $cliente->codice_fiscale }}</td>
                    <td>{{ $cliente->email }}</td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
