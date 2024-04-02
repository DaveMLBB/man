<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FornitoriController;
use App\Http\Controllers\PreventiviController;
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

Route::get('/clienti', [ClienteController::class, 'index'])->name('clienti.index');

Route::get('/fornitori', [FornitoriController::class, 'index'])->name('fornitori.index');

Route::get('/preventivi', [PreventiviController::class, 'index'])->name('preventivi.index');

