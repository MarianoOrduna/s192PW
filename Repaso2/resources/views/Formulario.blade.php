<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js']) 
    <title>Formulario de Libro</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #e9ecef;
            display: flex;
            flex-direction: column;
        }

        /* Estilos de la barra de navegación */
        nav {
            background-color: #343a40;
            color: #fff;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 15px;
        }

        nav a:hover {
            text-decoration: underline;
        }

        /* Contenedor del formulario */
        .form-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            margin: auto; /* Centra el contenedor */
            margin-top: 50px; /* Espacio superior */
        }

        .form-title {
            font-size: 1.8em;
            color: #343a40;
            text-align: center;
            margin-bottom: 20px;
        }

        .mb-3 {
            margin-bottom: 15px;
        }

        .form-label {
            font-weight: bold;
            color: #495057;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            font-size: 1em;
            color: #333;
            background-color: #f8f9fa;
            border: 1px solid #ced4da;
            border-radius: 5px;
            outline: none;
            transition: border-color 0.3s ease;
        }

        .form-control:focus {
            border-color: #343a40;
        }

        .fst-italic {
            font-size: 0.9em;
            color: #dc3545;
        }

        .submit-btn {
            width: 100%;
            padding: 10px;
            font-size: 1em;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .submit-btn:hover {
            background-color: #218838;
        }

        /* Estilos del pie de página */
        footer {
            background-color: #343a40;
            color: #fff;
            text-align: center;
            padding: 10px;
            margin-top: auto; /* Empuja el pie de página hacia abajo */
        }
    </style>
</head>
<body>
@extends('layouts.plantilla1')
@section('titulo','Formulario')
@section('contenido')
   
    <div class="form-container">
        <h2 class="form-title">Formulario de Libro</h2>
        <div class="mb-3">
            <label for="nombre" class="form-label">{{__('ISBN')}}</label>
            <input type="text" class="form-control" name="txtnombre" value="{{old('txtnombre')}}">
            <small class="fst-italic">{{$errors->first('txtnombre')}}</small>
        </div>

        <div class="mb-3">
            <label for="titulo" class="form-label">{{__('Titulo')}}</label>
            <input type="text" class="form-control" name="txttitulo" value="{{old('txttitulo')}}">
            <small class="fst-italic">{{$errors->first('txttitulo')}}</small>
        </div>

        <div class="mb-3">
            <label for="autor" class="form-label">{{__('Autor')}}</label>
            <input type="text" class="form-control" name="txtautor" value="{{old('txtautor')}}">
            <small class="fst-italic">{{$errors->first('txtautor')}}</small>
        </div>

        <div class="mb-3">
            <label for="paginas" class="form-label">{{__('Paginas')}}</label>
            <input type="text" class="form-control" name="txtpaginas" value="{{old('txtpaginas')}}">
            <small class="fst-italic">{{$errors->first('txtpaginas')}}</small>
        </div>

        <div class="mb-3">
            <label for="ano" class="form-label">{{__('Año')}}</label>
            <input type="text" class="form-control" name="txtano" value="{{old('txtano')}}">
            <small class="fst-italic">{{$errors->first('txtano')}}</small>
        </div>

        <div class="mb-3">
            <label for="editorial" class="form-label">{{__('Editorial')}}</label>
            <input type="text" class="form-control" name="txteditorial" value="{{old('txteditorial')}}">
            <small class="fst-italic">{{$errors->first('txteditorial')}}</small>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">{{__('Email de Editorial')}}</label>
            <input type="email" class="form-control" name="txtemail" value="{{old('txtemail')}}">
            <small class="fst-italic">{{$errors->first('txtemail')}}</small>
        </div>

        <button type="submit" class="submit-btn">Enviar</button>
    </div>
   
@endsection
</body>
</html>
