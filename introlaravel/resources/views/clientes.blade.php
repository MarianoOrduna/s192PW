@extends('layouts.plantilla1')
@section('titulo','Clientes Registrados')
@section('contenido')
      {{-- tarjetacliente --}}
      <div class="container mt-5 col-md-8">
      
      <div class="card text-justify font-monospace">

        <div class="card-header fs-5 text-primary">
          Mariano Orduña Durán
        </div>
        <div class="card-body">
          <h5 class="fw-bold">122043964@upq.edu.mx</h5>
          <h5 class="fw-medium">4426005049</h5>
          <p class="card-text fw-lighter"></p>

        </div>

        <div class="card-footer text-muted">
          <button type="submit" class="btn btn-warning btn-sm">Actualizar</button>
          <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
        </div>

      </div>
      {{-- finaliza tarjetacliente --}}
      </div>
    
      @endsection('contenido') 