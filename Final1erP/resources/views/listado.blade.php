<!DOCTYPE html>
<html lang="es">
@vite(['resources/js/app.js'])
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Lista de Contactos </title>
   


</head>


<body>

    <h1 class="display-1 text-warning text-center"> Listado de Contactos </h1>

    <a href="{{ route('rutaform') }}"> Regresa al formulario </a>
    <a href="{{ route('rutainicio') }}"> Regresa al inicio </a>

</body>

</html>