<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ControladorVistas;

Route::get('/', [controladorVistas::class,'home'])->name('rutainicio');
Route::get('/form', [controladorVistas::class,'formulario'])->name('rutaform');
Route::get('/client', [controladorVistas::class,'consulta'])->name('rutaclientes');
Route::view('componentes', 'componentes')->name('rutacomponentes');
Route::post('/enviarCliente', [controladorVistas::class,'procesarCliente'])->name('rutaEnviar');










//ruta tipo get
/* Route::get('/', function () {
    return view('welcome');
}); */

//ruta tipo view
/* Route::view('inicio', 'inicio')->name('rutainicio');

Route::view('form', 'formulario')->name('rutaform');

Route::view('client', 'clientes')->name('rutaclientes');

Route::view('componentes', 'componentes')->name('rutacomponentes'); */

