<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Convertidor de Unidades</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        input, select {
            padding: 10px;
            margin: 10px 0;
            font-size: 1rem;
            width: 100%;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .btn {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            font-size: 1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .result {
            margin-top: 20px;
            font-size: 1.2rem;
            color: #333;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Convertidor de Unidades</h1>
    <form action="repaso" method="POST">
        @csrf
        <label for="value">Introduce el valor:</label>
        <input type="number" name="value" placeholder="Introduce el número" required />

        <label for="conversion">Selecciona la conversión:</label>
        <select name="conversion" required>
            <option value="MBtoGB">MB a GB</option>
            <option value="GBtoMB">GB a MB</option>
            <option value="GBtoTB">GB a TB</option>
            <option value="TBtoGB">TB a GB</option>
        </select>

        <button class="btn" type="submit">Convertir</button>
    </form>

    @if(session('result'))
        <div class="result">
            {{ session('result') }}
        </div>
    @endif
</div>

</body>
</html>

