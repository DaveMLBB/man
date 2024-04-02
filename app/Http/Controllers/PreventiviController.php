<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PreventiviController extends Controller
{
    public function index()
    {
        return view('preventivi');
    }
}
