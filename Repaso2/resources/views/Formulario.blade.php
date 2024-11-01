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

        .form-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            margin: auto;
            margin-top: 50px; 
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

        footer {
            background-color: #343a40;
            color: #fff;
            text-align: center;
            padding: 10px;
            margin-top: auto;
        }
    </style>
</head>

<body>
@extends('layouts.plantilla1')
@section('titulo', 'Formulario')
@section('contenido')

    <div class="container mt-5 col-md-6">
        @if (session('exito'))
            <div class="alert alert-success" role="alert">
                {{ session('exito') }}
            </div>
        @endif
        @session('exito')
        <script>Swal.fire({
  title: "Libro Registrado",
  text: "Registro con exito.",
  imageUrl: "https://cdn.prod.website-files.com/64647a41533042ad6b35e9e4/64647a42533042ad6b35eaec_Group%2011.svg",
  imageWidth: 400,
  imageHeight: 200,
  imageAlt: "Custom image"
});
</script>
@endsession
        <div class="form-container">
            <h2 class="form-title">{{ __('Formulario de Libro') }}</h2>

            <form action="{{ route('validar') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="txtISBN" class="form-label">{{ __('ISBN') }}</label>
                    <input type="text" class="form-control" name="txtISBN" value="{{ old('txtISBN') }}">
                    <small class="fst-italic">{{ $errors->first('txtISBN') }}</small>
                </div>

                <div class="mb-3">
                    <label for="txttitulo" class="form-label">{{ __('Titulo') }}</label>
                    <input type="text" class="form-control" name="txttitulo" value="{{ old('txttitulo') }}">
                    <small class="fst-italic">{{ $errors->first('txttitulo') }}</small>
                </div>

                <div class="mb-3">
                    <label for="txtautor" class="form-label">{{ __('Autor') }}</label>
                    <input type="text" class="form-control" name="txtautor" value="{{ old('txtautor') }}">
                    <small class="fst-italic">{{ $errors->first('txtautor') }}</small>
                </div>

                <div class="mb-3">
                    <label for="txtpaginas" class="form-label">{{ __('Paginas') }}</label>
                    <input type="text" class="form-control" name="txtpaginas" value="{{ old('txtpaginas') }}">
                    <small class="fst-italic">{{ $errors->first('txtpaginas') }}</small>
                </div>

                <div class="mb-3">
                    <label for="txtano" class="form-label">{{ __('Año') }}</label>
                    <input type="text" class="form-control" name="txtano" value="{{ old('txtano') }}">
                    <small class="fst-italic">{{ $errors->first('txtano') }}</small>
                </div>

                <div class="mb-3">
                    <label for="txteditorial" class="form-label">{{ __('Editorial') }}</label>
                    <input type="text" class="form-control" name="txteditorial" value="{{ old('txteditorial') }}">
                    <small class="fst-italic">{{ $errors->first('txteditorial') }}</small>
                </div>

                <div class="mb-3">
                    <label for="txtemail" class="form-label">{{ __('Email de Editorial') }}</label>
                    <input type="email" class="form-control" name="txtemail" value="{{ old('txtemail') }}">
                    <small class="fst-italic">{{ $errors->first('txtemail') }}</small>
                </div>

                <button type="submit" class="submit-btn">{{ __('Enviar') }}</button>
            </form>
        </div>
    </div>
@endsection
