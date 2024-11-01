<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;


Route::view('/', 'welcome')->name('inicio');
Route::view('Formulario', 'Formulario')->name('Formulario');
Route::post('/validarLibro', [ControladorVistas::class,'ValidarLibros'])->name('validar');