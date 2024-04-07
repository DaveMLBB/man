<?php

namespace App\Mappers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClientMapper
{
    public static function toModel(Request $request): Cliente
    {
        $cliente = new Cliente();
        $cliente->nazione = $request->input('nazione');
        $cliente->tipologia = $request->input('tipologia');
        $cliente->partita_iva = $request->input('partita_iva');
        $cliente->codice_fiscale = $request->input('codice_fiscale');
        $cliente->ragione_sociale = $request->input('ragione_sociale');
        $cliente->cap = $request->input('cap');
        $cliente->comune = $request->input('comune');
        $cliente->indirizzo = $request->input('indirizzo');
        $cliente->referente = $request->input('referente');
        $cliente->email = $request->input('email');
        $cliente->telefono = $request->input('telefono');
        $cliente->codice_destinatario = $request->input('codice_destinatario');
        $cliente->pec = $request->input('pec');
        
        return $cliente;
    }
}
