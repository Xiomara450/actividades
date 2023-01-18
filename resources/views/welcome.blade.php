<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                color: #080808;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            body{
            background-image: url('storage/imagenes/fibo.jpg')
            }
            .content {
            text-align: center;
            }

            .titulo{
            font-size: 84px;
            margin-bottom: 30px;
            }

            .links > a {
            color: #000000;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
            }
        
        </style>
    </head>
    <body>

        <div class="content">
        <div class="titulo">
        ACTIVIDADES ALGORITMICAS
        </div>

        <div class="links">
        <a href="/fibo">EJERCICIO FIBONACCI</a>
        <a href="/factor">EJERCICIO FACTORIZACIÓN</a>
                 
        </div>
        </div>
            
       
    </body>
</html>
