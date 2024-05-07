<?php

namespace App\Http\Controllers;

use App\Mappers\ClientMapper;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clienti = Cliente::all();
        return view('clienti', compact('clienti'));
    }

    public function create()
    {
        return view('clienti.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'partita_iva' => 'required|unique:clienti,partita_iva',
            'codice_fiscale' => 'required|unique:clienti,codice_fiscale',
            'email' => 'nullable|email|unique:clienti,email',
            'telefono' => 'nullable|unique:clienti,telefono',
            'codice_destinatario' => 'nullable|unique:clienti,codice_destinatario',
            'pec' => 'nullable|unique:clienti,pec',
            'ragione_sociale' => 'nullable|unique:clienti,ragione_sociale',
            ]);

        $cliente = new Cliente();
        $cliente = ClientMapper::toModel($request);

        $cliente->save();

        return redirect()->route('clienti.index')->with('success', 'Cliente creato con successo!');
    }

    public function search(Request $request)
    {
        $query = Cliente::query();

        if ($request->filled('ragione_sociale')) {
            $query->where('ragione_sociale', 'like', '%' . $request->ragione_sociale . '%');
        }

        if ($request->filled('tipologia')) {
            $query->where('tipologia', $request->tipologia);
        }

        $clienti = $query->get();

        return view('clienti', compact('clienti'));
    }

}
