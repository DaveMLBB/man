{{-- resources/views/clienti/create.blade.php --}}
@extends('layouts.app')

@section('title', 'Nuovo Cliente - ' . env('TITLE', 'Il Tuo Titolo Personalizzato'))

@section('header', 'Nuovo Cliente')

@section('header-buttons')
<div class="header-buttons">
    <a href="{{ route('clienti.index') }}" class="header-button">Torna ai Clienti</a>
</div>
@endsection

@section('content')
<style>
    .form-custom {
        background-color: #f8f9fa;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        max-width: 600px;
        margin: auto;
        margin-top: 100px;
    }

    .form-custom .form-group {
        margin-bottom: 15px;
    }

    .form-custom label {
        margin-bottom: 5px;
        display: block;
    }

    .form-custom input[type="text"],
    .form-custom .form-control {
        width: 100%;
        padding: 8px;
        border: 1px solid #ced4da;
        border-radius: 4px;
        margin-bottom: 10px;
    }

    .form-custom button[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .form-custom button[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>

<div class="form-custom">
    <h2>Crea un Nuovo Cliente</h2>

    @if ($errors->any())
        <div>
            <strong>Errori:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('clienti.store') }}">
        @csrf

        <div class="form-group">
            <label for="nazione">Nazione:</label>
            <input type="text" name="nazione" id="nazione" required class="form-control">
        </div>

        <div class="form-group">
            <label for="tipologia">Tipologia:</label>
            <select name="tipologia" id="tipologia" class="form-control">
                <option value="">Seleziona</option>
                <option value="associazioneNoProfit">Associazione no profit</option>
                <option value="azienda">Privato</option>
                <option value="professionista">Professionista</option>
                <option value="pubblicaAmministrazione">Pubblica amministrazione</option>
                <option value="societa">Società</option>


            </select>
        </div>

        <div class="form-group">
            <label for="partita_iva">Partita IVA:</label>
            <input type="text" name="partita_iva" id="partita_iva" class="form-control">
        </div>

        <div class="form-group">
            <label for="codice_fiscale">Codice Fiscale:</label>
            <input type="text" name="codice_fiscale" id="codice_fiscale" class="form-control">
        </div>

        <div class="form-group">
            <label for="ragione_sociale">Ragione Sociale:</label>
            <input type="text" name="ragione_sociale" id="ragione_sociale" class="form-control">
        </div>

        <div class="form-group">
            <label for="cap">CAP:</label>
            <input type="text" name="cap" id="cap" class="form-control">
        </div>

        <div class="form-group">
            <label for="comune">Comune:</label>
            <input type="text" name="comune" id="comune" class="form-control">
        </div>

        <div class="form-group">
            <label for="indirizzo">Indirizzo:</label>
            <input type="text" name="indirizzo" id="indirizzo" class="form-control">
        </div>

        <div class="form-group">
            <label for="referente">Referente:</label>
            <input type="text" name="referente" id="referente" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">E-Mail:</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="telefono">Telefono:</label>
            <input type="text" name="telefono" id="telefono" class="form-control">
        </div>

        <div class="form-group">
            <label for="codice_destinatario">Codice Destinatario:</label>
            <input type="text" name="codice_destinatario" id="codice_destinatario" class="form-control">
        </div>

        <div class="form-group">
            <label for="pec">PEC:</label>
            <input type="email" name="pec" id="pec" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Salva Cliente</button>
    </form>
</div>
@endsection