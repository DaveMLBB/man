<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToClientiTable extends Migration
{
    public function up()
    {
        Schema::table('clienti', function (Blueprint $table) {
            $table->string('nazione')->nullable();
            $table->string('tipologia')->nullable();
            $table->string('partita_iva')->unique()->nullable();
            $table->string('codice_fiscale')->unique()->nullable();
            $table->string('ragione_sociale')->nullable();
            $table->string('cap')->nullable();
            $table->string('comune')->nullable();
            $table->string('indirizzo')->nullable();
            $table->string('referente')->nullable();
            $table->string('email')->nullable();
            $table->string('telefono')->nullable();
            $table->string('codice_destinatario')->nullable();
            $table->string('pec')->nullable();
            // Aggiungi qui altre colonne se necessario
        });
    }

    public function down()
    {
        Schema::table('clienti', function (Blueprint $table) {
            // Rimuovi le colonne nel rollback
            $table->dropColumn(['nazione', 'tipologia', 'partita_iva', 'codice_fiscale', 'ragione_sociale', 'cap', 'comune', 'indirizzo', 'referente', 'email', 'telefono', 'codice_destinatario', 'pec']);
        });
    }
}
