
@extends('layouts.plantilla1')
@section('titulo','editar')
@section('contenidoEdicion')

         
         
            
              <div class="card-body text-justify">
                
                <form action="{{ route('enviarCliente') }}" method="POST"> 
                  <!-- //usar bien el action, este formulario manda a la ruta -->

                  @csrf 

                  <div class="mb-3">
                    <label for="nombre" class="form-label">{{__('Nombre')}} </label>
                    <input type="text" class="form-control" name="txtnombre" value="{{old('txtnombre')}}">
                    <small class='fst-italic text-danger'>{{$errors->first('txtnombre')}}</small>
                  </div>

                  <div class="mb-3">
                    <label for="apellido" class="form-label">{{__('Apellido')}}</label>
                    <input type="text" class="form-control" name="txtapellido"value="{{old('txtapellido')}}">
                    <small class='fst-italic text-danger'>{{$errors->first('txtapellido')}}</small>
                  </div>

                  <div class="mb-3">
                    <label for="correo" class="form-label">{{__('Correo')}}</label>
                    <input type="text" class="form-control" name="txtcorreo" value="{{old('txtcorreo')}}">
                    <small class='fst-italic text-danger'>{{$errors->first('txtcorreo')}}</small>
                  </div>

                  <div class="mb-3">
                    <label for="telefono" class="form-label">{{__('Telefono')}}</label>
                    <input type="text" class="form-control" name="txttelefono" value="{{old('txttelefono')}}">
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
      
    
