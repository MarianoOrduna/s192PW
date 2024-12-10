<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('form', 'formulario')->name('rutaform');
Route::view('inicio', 'welcome')->name('rutainicio');
Route::view('listado', 'listado')->name('rutalist');