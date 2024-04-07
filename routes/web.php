<?php

use App\Http\Controllers\ArticoliController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DDTController;
use App\Http\Controllers\FattureController;
use App\Http\Controllers\FornitoriController;
use App\Http\Controllers\MagazzinoController;
use App\Http\Controllers\PreventiviController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [AuthController::class, 'welcome'])->name('welcome');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');

// CLIENTI ROUTE
Route::get('/clienti', [ClienteController::class, 'index'])->name('clienti.index');
Route::get('/clienti/nuovo', [ClienteController::class, 'create'])->name('clienti.create');
Route::post('/clienti/nuovo/salva', [ClienteController::class, 'store'])->name('clienti.store');
Route::get('/clienti/search', [ClienteController::class, 'search'])->name('clienti.search');


Route::get('/fornitori', [FornitoriController::class, 'index'])->name('fornitori.index');

Route::get('/preventivi', [PreventiviController::class, 'index'])->name('preventivi.index');

Route::get('/ddt', [DDTController::class, 'index'])->name('ddt.index');

Route::get('/magazzino', [MagazzinoController::class, 'index'])->name('magazzino.index');

Route::get('/articoli', [ArticoliController::class, 'index'])->name('articoli.index');

Route::get('/reportistica', [ReportController::class, 'index'])->name('report.index');

Route::get('/fatture', [FattureController::class, 'index'])->name('fatture.index');
