<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FACTORIZACION</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
            background-image: url('storage/imagenes/fondo1.png');
            font-family:initial;
            height: 100vh;
            }

            .content {
            text-align: center;
            }

            .titulo {
            font-weight: 500;
            font-size: 84px;
            top: 100px;
            color: #01e472;
            padding-right: 50%;
            }

            .links > a {
            color: #e49c01;
            font-size: 25px;
            font-weight: 800; /* GROSOR DE LA LETRA  */
            text-decoration: none;
           
            }
           .text{    
           position: relative;
           top: 400px;
           }

           
            
            


        </style>
    </head>
    <body>
        
    <div class="content">
        <div class="titulo">
         FACTORIZACIÓN
        </div>

        <div class="links">
        <a href="/factor" class="text">INTENTALO</a>
        </div>
    </div>
    </body>
</html>
