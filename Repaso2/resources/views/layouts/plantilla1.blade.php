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
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
        <div>
            <a href="{{ route('inicio') }}">Principal</a>
            <a href="{{ route('Formulario') }}">{{__('Registro de libro')}}</a>
            
        </div>
    </nav>
           
    </nav>
    @yield('contenido')
    
</body>
</html>
</div>
    <footer class="text-center py-4">
    <p>Biblioteca Qro - Mariano Orduna Duran - 31 de Octubre del 2024</p>
  </footer>


 