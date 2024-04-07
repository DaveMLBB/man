<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clienti'; 

    protected $fillable = [
        'nome',
        'nazione',
        'tipologia',
        'partita_iva',
        'codice_fiscale',
        'ragione_sociale',
        'cap',
        'comune',
        'indirizzo',
        'referente',
        'email',
        'telefono',
        'codice_destinatario',
        'pec',
    ];
}
