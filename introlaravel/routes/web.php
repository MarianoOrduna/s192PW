<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;
use App\Http\Controllers\clienteController;
//controlador vistas
Route::get('/', [controladorVistas::class,'home'])->name('rutainicio');


Route::view('componentes', 'componentes')->name('rutacomponentes');
Route::post('/enviarCliente', [controladorVistas::class,'procesarCliente'])->name('rutaEnviar');

//controlador cliente

Route::get('/cliente/create',[clienteController::class,'create'])->name('rutaform');

Route::post('/cliente',[clienteController::class,'store'])->name('enviarCliente');
Route::get('/client', [clienteController::class,'index'])->name('rutaclientes');

/* La ruta tipo post que se escribe clinete, que mande a clienteController en la funcion store
Ver que este la importacion del controlador */


//ruta tipo get
/* Route::get('/', function () {
    return view('welcome');
}); */

//ruta tipo view
/* Route::view('inicio', 'inicio')->name('rutainicio');

Route::view('form', 'formulario')->name('rutaform');

Route::view('client', 'clientes')->name('rutaclientes');

Route::view('componentes', 'componentes')->name('rutacomponentes'); */

