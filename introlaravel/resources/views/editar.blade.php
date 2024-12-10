
@extends('layouts.plantilla1')
@section('titulo','editar')
@section('contenidoEdicion')

         
         
            
              <div class="card-body text-justify">
                
                <form action="{{ route('actualizarCliente', $Cliente->id) }}" method="POST"> 
                  <!-- //usar bien el action, este formulario manda a la ruta -->

                  @csrf 
                  @method('PUT')

                  <div class="mb-3">
                    <label for="nombre" class="form-label">{{__('Nombre')}} </label>
                    <input type="text" class="form-control" name="txtnombre" value="{{$Cliente->nombre}}">
                    <small class='fst-italic text-danger'>{{$errors->first('txtnombre')}}</small>
                  </div>

                  <div class="mb-3">
                    <label for="apellido" class="form-label">{{__('Apellido')}}</label>
                    <input type="text" class="form-control" name="txtapellido"value="{{$Cliente->apellido}}">
                    <small class='fst-italic text-danger'>{{$errors->first('txtapellido')}}</small>
                  </div>

                  <div class="mb-3">
                    <label for="correo" class="form-label">{{__('Correo')}}</label>
                    <input type="text" class="form-control" name="txtcorreo" value="{{$Cliente->correo}}">
                    <small class='fst-italic text-danger'>{{$errors->first('txtcorreo')}}</small>
                  </div>

                  <div class="mb-3">
                    <label for="telefono" class="form-label">{{__('Telefono')}}</label>
                    <input type="text" class="form-control" name="txttelefono" value="{{$Cliente->telefono}}">
                    <small class='fst-italic text-danger'>{{$errors->first('txttelefono')}}</small>
                  </div>

                  <div class="card-footer text-muted">
                    <div class="d-grid gap2 mt-2 mb-1">
                      <button type="submit" class="btn btn-success btn-sm">{{__('Guardar Clientes')}} </button>
                    </div>
                  </div>
                </form>
                
              </div>
            

 @endsection('contenido')         
      
    
