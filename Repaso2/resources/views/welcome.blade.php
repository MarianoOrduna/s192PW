@extends('layouts.plantilla1')
@section('titulo','Formulario')
@section('contenido')

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faker Gana su Primer Mundial de League of Legends</title>
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Encabezado */
        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        header h1 {
            font-size: 2.5em;
            margin: 0;
        }

        /* Contenedor principal */
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .news-title {
            font-size: 2em;
            color: #333;
            margin-bottom: 15px;
        }

        .news-image {
            width: 100%;
            border-radius: 8px;
            margin: 20px 0;
        }

        .news-content {
            font-size: 1.1em;
            color: #555;
            line-height: 1.6;
        }

        /* Pie de página */
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            margin-top: auto;
        }

        footer p {
            margin: 0;
        }
    </style>
</head>
<body>

    <!-- Encabezado -->
    <header>
        <h1>Noticias de eSports</h1>
    </header>

    <!-- Contenido principal -->
    <div class="container">
        <h2 class="news-title">Faker Gana su Primer Mundial de League of Legends</h2>
        <img src="faker.jpg" alt="Faker levantando el trofeo del Mundial" class="news-image">
        <div class="news-content">
            <p><strong>Fecha:</strong> 4 de octubre de 2013</p>
            <p>En un momento histórico para el mundo de los videojuegos, Lee "Faker" Sang-hyeok, la leyenda de League of Legends, ganó su primer mundial en el Campeonato Mundial de 2013. Este logro consolidó su lugar como uno de los mejores jugadores de todos los tiempos en los eSports.</p>
            <p>Faker y su equipo, SK Telecom T1, dominaron en la final contra Royal Club, logrando una victoria de 3-0 y dejando una marca imborrable en la historia del juego. Faker impresionó al mundo con su habilidad, visión y dominio estratégico, especialmente con su famoso campeón Zed.</p>
            <p>Desde ese momento, Faker ha sido una figura clave en el desarrollo de los eSports, inspirando a millones de jugadores alrededor del mundo a seguir sus pasos. Su primer campeonato no solo significó una victoria personal, sino también un hito en la profesionalización de los deportes electrónicos.</p>
        </div>
    </div>

  

</body>
</html>


@endsection('contenido')