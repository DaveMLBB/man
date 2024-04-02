<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clienti = Cliente::all();
        return view('clienti', compact('clienti'));
    }
}
