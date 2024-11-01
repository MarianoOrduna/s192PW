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

    
    <header>
        <h1>{{ __('Noticia Literaria') }}</h1>
    </header>

   
    <div class="container">
        <h2 class="news-title">{{ __('Los Poetas Malditos') }}</h2>
        <img src="https://i0.wp.com/img.culturacolectiva.com/content/2016/03/poetas-malditos.jpg?ssl=1" alt="Poetas Malditos" class="news-image">
        <div class="news-content">
            <p><strong>Fecha:</strong> 31 de octubre de 2024</p>
            <p>"Los poetas malditos" es un término que se refiere a un grupo de poetas franceses del siglo XIX y principios del XX que compartían características comunes en su obra y en su vida personal, siendo asociados con la bohemia, el sufrimiento y la búsqueda de la verdad a través de la poesía. Este término se popularizó gracias al libro del poeta Paul Verlaine, que lleva el mismo nombre, publicado en 1884.</p>
            <p><strong>Principales poetas malditos</strong></p>
            <p>Charles Baudelaire: Considerado uno de los precursores del simbolismo y del modernismo, su obra "Las flores del mal" aborda temas de la belleza, la decadencia y la muerte.</p>
            <p>Arthur Rimbaud: Conocido por su vida tumultuosa y su estilo innovador, sus poemas, como "Una temporada en el infierno", reflejan su rebelión contra las normas sociales y poéticas.</p>
            <p>Paul Verlaine: Además de ser un poeta notable, Verlaine fue parte de la vida bohemia de París y tuvo una relación tumultuosa con Rimbaud.</p>
            <p>Stéphane Mallarmé: Su poesía es compleja y a menudo abstracta, lo que lo coloca en la línea del simbolismo.</p>
            <p>Alfred de Musset: Aunque más conocido por sus obras de teatro y prosa, también fue considerado un poeta maldito por su vida amorosa y su sufrimiento personal.</p>
            
            
            <p><strong>Razones de la catalogación</strong></p>
            <p>Vida turbulenta: Muchos de estos poetas llevaron vidas desoladas, llenas de sufrimiento, adicciones y problemas mentales, lo que alimentó su obra.</p>
            <p>Rebeldía: Se oponían a las convenciones literarias de su tiempo y buscaban nuevos modos de expresión poética.</p>
            <p>Temas oscuros: Su poesía a menudo explora la melancolía, la muerte, el amor perdido y la desesperación, lo que contrasta con la poesía más optimista de la época.</p>
            <p>Influencia en el simbolismo: Su enfoque en la musicalidad del lenguaje y el uso de símbolos influenció a movimientos posteriores en la poesía.</p>
        </div>
    </div>

  

</body>
</html>


@endsection('contenido')