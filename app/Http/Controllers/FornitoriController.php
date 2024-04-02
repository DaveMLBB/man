<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornitoriController extends Controller
{
    public function index()
    {
        // Puoi passare dati alla tua vista se necessario
        return view('fornitori');
    }
}
