<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Repaso extends Controller
{
    public function mostrarFormulario()
    {
        return view('repaso'); 
    }

    public function convertir(Request $request)
    {
        $value = $request->input('value');
        $conversion = $request->input('conversion');

        
        if (!is_numeric($value) || $value <= 0) {
            return back()->with('result', 'Por favor, introduce un número válido.');
        }

        
        $result = '';
        switch ($conversion) {
            case 'MBtoGB':
                $result = $value . ' MB son ' . ($value / 1024) . ' GB';
                break;
            case 'GBtoMB':
                $result = $value . ' GB son ' . ($value * 1024) . ' MB';
                break;
            case 'GBtoTB':
                $result = $value . ' GB son ' . ($value / 1024) . ' TB';
                break;
            case 'TBtoGB':
                $result = $value . ' TB son ' . ($value * 1024) . ' GB';
                break;
            default:
                $result = 'Conversión no válida.';
        }

       
        return ($result);
    }
}

