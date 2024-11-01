<?php

namespace App\Http\Controllers;
use App\Http\Requests\ValidarLibros;
use Illuminate\Http\Request;

class ControladorVistas extends Controller

{
    public function ValidarLibros(ValidarLibros $peticionValidada){
 $libro= $peticionValidada->input("txtISBN");
 session()->flash('exito','Se guardo el usuario'.$libro);
 return to_route('Formulario');
 }
}