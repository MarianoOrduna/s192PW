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
<body>
<div class="mb-3">
                    <label for="nombre" class="form-label">{{__('Nombre')}} </label>
                    <input type="text" class="form-control" name="txtnombre" value="{{old('txtnombre')}}">
                    <small class='fst-italic text-danger'>{{$errors->first('txtnombre')}}</small>
                  </div>
</body>
</html>