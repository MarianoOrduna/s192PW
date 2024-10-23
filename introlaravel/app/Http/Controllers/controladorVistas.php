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

$validated= $peticion->validate([
    'txtnombre'=>'required|min:3|max:25',
    'txtapellido'=>'required|min:3|max:25',
    'txtcorreo'=>'required|email:rfc,dns',
    'txttelefono'=>'required|numeric',
 ]);



       //redireccion con valores
$usuario= $peticion->input("txtnombre");
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