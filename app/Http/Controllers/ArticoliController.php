<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticoliController extends Controller
{
    public function index()
    {
        return view('articoli');
    }
}
