<?php

namespace App\Http\Controllers;
use App\Http\Requests\Validarusuarios;
use Illuminate\Http\Request;

class peticiones extends Controller
{
    public function formUsuarios()
    {
        return view('formUsuarios'); 
    }

   
    public function Validarusuarios(Validarusuarios $peticionValidada)
    {
        $usuario = $peticionValidada->input("txtcorreo");
        session()->flash('exito', 'Se guardo el usuario'. $usuario);
        return to_route('formUsuarios');
    }
}

