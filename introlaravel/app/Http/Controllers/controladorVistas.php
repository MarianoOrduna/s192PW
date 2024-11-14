<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorClientes;

class controladorVistas extends Controller
{
    public function home(){
        return view('inicio');
    }

    public function formulario(){
        /* return view('formulario'); */
    }


    public function consulta(){
       
    }

    public function procesarCliente(validadorClientes $peticionValidada){




       //redireccion con valores
$usuario= $peticionValidada->input("txtnombre");
session()->flash('exito','Se guardo el usuario'.$usuario);
return to_route('rutaform');
}
}

 /* return 'La informacion del cliente llego al controlador'; */
        /* return $peticion->all(); */

        /* return $peticion->path(); */
/*         return $peticion->all();*/  
/* return $peticion->ip(); */
/* return redirection('/'); */
/* return redirect()->route('rutaclientes'); */
/* return back(); */