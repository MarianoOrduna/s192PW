<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js']) 
    <title>Document</title>
    <style>
        body, html{
            height: 100%
        }
        .full-height{
            height: 100vh;
        }
    </style>
</head>
@extends('layouts.plantilla1')
@section('titulo','Formulario')
@section('contenido')
<body>
    <div class="d-flex flex-column justify-content-center align-items-center text-center full-height">
        <h1 class="display-1">Biblioteca</h1>
        <p>Presione para inciar......</p>
        <!-- <a href="/form" class="btn btn-primary">Ir al Registro</a> -->
        <a href="{{ route('Formulario') }}" class="btn btn-primary">Ir al Registro</a>
   
    
</body>
</html>
@endsection('contenido')