<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornitoriController extends Controller
{
    public function index()
    {
        return view('fornitori');
    }
}
