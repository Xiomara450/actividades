<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMON DICE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <h1>SIMON DICE </h1>
    

<div class="contenedor">
  <div class="buttoncolor">
    <div id="amarillo"  data-color="amarillo"  class="square amarillo"></div>
    <div id="azul"      data-color="azul"      class="square azul"></div>
    <div id="rojo"      data-color="rojo"      class="square rojo"></div>
    <div id="verde"     data-color="verde"     class="square verde"></div>    
  </div>
     <button id="btnEmpezar"  onclick="iniciar()">Empezar</button>
</div>



<script src="./simon.js"></script>
</body>
</html>