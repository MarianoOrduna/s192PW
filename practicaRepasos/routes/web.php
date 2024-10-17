<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\repaso;
Route::view('/', 'welcome')->name('rutawelcome');
Route::view('repaso', 'repaso')->name('rutarepaso'); 
Route::post('/repaso', [Repaso::class, 'convertir']);


 


