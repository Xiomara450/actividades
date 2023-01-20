<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FACTORIZAR</title>
</head>
<body>
<STYle>
body{
background-image: url('storage/imagenes/fondo1.png');
}
h1{
color:#030303;
text-align: center;
}
.imgf{
width: 15%;
margin: auto;
display: block;
}
.input{
margin: auto;
display: block;
margin-top:50px;
border:0; 
background-color: #24f3e2;
width: 20%;
outline: 0;
border-radius: 5px;
border:1px solid #000000;
}
.boton{
-webkit-transition-duration: 0.4s; 
transition-duration: 0.4s;
margin: auto;
display: block;
cursor: pointer;
margin-top:40px;
width: 8%; 
background-color: #a9e5f0;
}
.boton:hover{
background: #fc10ad;
color: #000000;
}
.label{
color: #ffffff;
font-size: 3vh;
text-align: center;
display: block;
}
.pre{
color: #000000;
text-align: center;
display: block;
font-size: 15px;
}
.placeholder{
font-size: 50%;
}
</STYle>
<h1>FACTORIZACIÓN</h1>
<p class="pre">
    Los estudiantes que se introducen en la factorización como principal método de resolución de ecuaciones cuadráticas que se sorprenda al saber que es uno de los más nuevos métodos para resolverlos. Vera Sanford señala en su A Short History of Mathematics (1930)5 que "en vista de la actual énfasis dado a la solución de ecuaciones cuadráticas por factorización, es interesante observar que este método no se utilizó hasta el trabajo de Harriot en 1631. Incluso en este caso, sin embargo, el autor hace caso omiso de los factores que dan lugar a las raíces negativas. "Harriot murió en 1621, y al igual que todos sus libros, este, Artis Analyticae Praxis ad Aequationes Algebraicas Resolvendas, fue publicado después de su muerte. Un artículo sobre Harriot en el sitio web de la historia matemática de la Universidad de San Andrews dice que en su escritura personal en la resolución de ecuaciones Harriot hizo uso de soluciones tanto positivos como negativos, pero su editor, Walter Warner, no presentó en su libro. método de factorización de Harriot puede ser distinta de lo que los estudiantes esperan modernas.</p>
  
  
<img src="{{asset('storage/imagenes/factor.png')}}"class="imgf" alt="">


<form action={{ route('factor.factorizacion') }} method="POST">
@csrf
@method('POST')

<input type="text" class="input" name="numero" placeholder="Escribe un numero">
<button type="submit" class="boton">Validar</button>

<a href="/">Regresar</a>

@if (isset($factor))
<label class="label">Estos son los numeros Fibonacci:  {{$factor}}  </label>
@endif
</form>
</body>
</html>