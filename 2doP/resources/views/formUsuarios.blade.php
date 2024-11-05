<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/js/app.js'])
</head>
<body>
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
<form action="{{ route('validar') }}" method="POST">
    @csrf
    <h1 class="text-center text-primary mt-5 mb-4">Registro de usuarios</h1>

    <div class="container  col-md-4">

    
    <form>

        <div class="mb-3">
            <label for="txtcorreo" class="form-label">Correo: </label>
            <input type="text" class="form-control" name="txtcorreo" value="{{ old('txtcorreo') }}">
            <small class="fst-italic">{{$errors->first('txtcorreo')}}</small>
        </div>

        <div class="mb-3">
            <label for="txtcontra" class="form-label">Contraseña: </label>
            <input type="text" class="form-control" name="txtcontra" value="{{ old('txtcontra') }}">
            <small class="fst-italic">{{$errors->first('txtcontra')}}</small>
        </div>                

        <div class="mb-3">
            <label for="txtedad"  class="form-label">Edad: </label>
            <input type="text" class="form-control" name="txtedad" value="{{ old('txtedad') }}">
            <small class="fst-italic">{{$errors->first('txtedad')}}</small>
        </div>



        <button type="submit" class="submit-btn "> Guardar Usuario</button>


</div>


</body>
</html>