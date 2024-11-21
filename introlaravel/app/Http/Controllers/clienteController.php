<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Http\Requests\validadorClientes;
/* Aqui deben de estar las 3 importaciones de arriba, la base de datos
el carbon y la del validador*/
class clienteController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * Nos sirve para la consulta del crud
     */
    public function index()
    {
        $consultaClientes= DB::table('clientes')->get();
        return view('clientes',compact('consultaClientes'));
    }
/* Hay que usar la tabla correcta, el nombre de la vista y el compact */
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(validadorClientes $request)
    {
        DB::table('clientes')->insert([
            "nombre"=>$request->input('txtnombre'),
            "apellido"=>$request->input('txtapellido'),
            "correo"=>$request->input('txtcorreo'),
            "telefono"=>$request->input('txttelefono'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),

        ]);
$usuario=$request->input('txtnombre');
session()->flash('exito','Se guardo el usuario'.$usuario);
return to_route('rutaform');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $cliente = DB::table('clientes')->where('id',$id)->first();
        return view('editar',compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
