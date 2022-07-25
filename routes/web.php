<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $utente = [
        'nome'=>'Giacomo',
        'cognome'=>'Di Nardo',
        'ruolo'=>'proprietario',
    ];

    $listaDesideri = [
        'whisky',
        'palla da basket',
        'scheda video nuova',
        'moto nuova'
    ];

    return view('home', [
        "user" => $utente,
        "list" => $listaDesideri
    ]);
});
