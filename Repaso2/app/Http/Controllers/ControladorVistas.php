<?php

namespace App\Http\Controllers;

use App\Http\Requests\Validaciones; 
use Illuminate\Http\Request;

class ControladorVistas extends Controller
{
    
    public function formulario()
    {
        return view('Formulario'); 
    }

   
    public function ValidarLibros(Validaciones $peticionValidada)
    {
        $libro = $peticionValidada->input("txtISBN");
        session()->flash('exito', 'Se guardo el libro'. $libro);
        return to_route('Formulario');
    }
}
