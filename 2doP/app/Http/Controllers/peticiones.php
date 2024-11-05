<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request\validaciones;

class peticiones extends Controller
{
    public function formUsuarios()
    {
        return view('formUsuarios'); 
    }

   
    public function Validarusuarios(validaciones $peticionValidada)
    {
        $usuario = $peticionValidada->input("txtISBN");
        session()->flash('exito', 'Se guardo el usuario'. $usuario);
        return to_route('formUsuario');
    }
}

