<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Reindirizzamento alla dashboard se l'autenticazione è riuscita
            return redirect()->intended('dashboard');
        }

        // Reindirizzamento indietro con un messaggio di errore se l'autenticazione fallisce
        return back()->withErrors([
            'email' => 'Le credenziali fornite non corrispondono ai nostri dati.',
        ]);
    }
}
