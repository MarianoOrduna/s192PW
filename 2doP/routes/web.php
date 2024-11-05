<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\peticiones;
Route::get('/', function () { return view('formUsuarios');});
Route::post('/validarusuario', [peticiones::class,'Validarusuarios'])->name('validar');
