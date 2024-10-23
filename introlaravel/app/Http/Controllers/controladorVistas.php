<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    public function home(){
        return view('inicio');
    }

    public function formulario(){
        return view('formulario');
    }


    public function consulta(){
        return view('clientes');
    }

    public function procesarCliente(Request $peticion){
        /* return 'La informacion del cliente llego al controlador'; */
        /* return $peticion->all(); */

        /* return $peticion->path(); */
/*         return $peticion->all();*/  
/* return $peticion->ip(); */
/* return redirection('/'); */
/* return redirect()->route('rutaclientes'); */
/* return back(); */
$usuario= $peticion->input("txtnombre");
session()->flash('exito','Se guardo el usuario'.$usuario);
return to_route('rutaform');
}
}

