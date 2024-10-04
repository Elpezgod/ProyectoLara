<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advertencia</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; 
            background-image: url('/img/peligro.jpg'); 
            background-size: cover; 
            background-position: center; 
            color: #721c24;
            margin: 0; 
            text-align: center; 
        }

        h1 {
            font-size: 2.5em; 
            margin-bottom: 20px; 
            background-color: rgba(255, 255, 255, 0.8); 
            padding: 20px; 
            border-radius: 10px; 
        }

        a {
            display: inline-block; 
            padding: 10px 20px; 
            background-color: #f5c6cb; 
            color: #721c24; 
            text-decoration: none; 
            border-radius: 5px; 
            transition: background-color 0.3s; 
        }

        a:hover {
            background-color: #f1b0b8; 
        }
    </style>
</head>
<body>
    <div>
        <h1>¡Qué intentas hacer! No juegues con esto</h1>
        <a href="{{ url('/') }}">Volver al inicio</a> 
    </div>
</body>
</html>
