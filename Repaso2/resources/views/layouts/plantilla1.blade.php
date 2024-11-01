<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js']) 
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>@yield('titulo')</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ route('inicio') }}">Noticias</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">

            <li class="nav-item active">
              <a class="nav-link {{ request()->routeIs('Formualrio')?'text-warning':'' }}" href="{{ route('Formulario') }}">{{__('Registro de libros')}} <span class="sr-only"></span></a>
            </li>

           
    </nav>
    @yield('contenido')
    
</body>
</html>
</div>
    <footer class="text-center py-4">
    <p>Biblioteca Qro - Mariano Orduna Duran - 31 de Octubre del 2024</p>
  </footer>
