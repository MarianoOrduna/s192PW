<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('inicio');
Route::view('Formulario', 'Formulario')->name('Formulario');