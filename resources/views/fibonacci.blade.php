<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FIBONACCI</title>
</head>
<body>
<STYle>
body{
background-image: url('storage/imagenes/fondo.png');
}
h1{
color:#e208b3;
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
background-color: #f1b9e5;
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
color: #ffffff;
text-align: center;
display: block;
font-size: 15px;
}
.placeholder{
font-size: 50%;
}
a{
text-align: center;
display: block;
}
</STYle>
<h1>FIBONACCI</h1>
<pre class="pre">
    LEONARDO DE PISA [Fibonacci]
    Considerado como el primer algebrista de Europa (cronológicamente hablando)  y como el introductor del sistema numérico árabe, fue educado de niño en Argelia, 
    donde su padre era funcionario  de aduanas, y donde aprendió "el ábaco, al uso 
    de los indios". Después tuvo manera, por razones de tipo comercial, de conocer  todo lo que de esta ciencia se 
    enseñaba en Egipto, en Siria, en Sicilia y en Provenza </pre>
    <h4>Xiomara</h4>
    <h5>estres</h5>
  
  
<img src="{{asset('storage/imagenes/fibonacci.png')}}"class="imgf" alt="">


<form action={{ route('fibo.fibonacci') }} method="POST">
@csrf
@method('POST')

<input type="text" class="input" name="numero" placeholder="Escribe un numero">
<button type="submit" class="boton">Validar</button>

<a href="/">Regresar</a>

@if (isset($fibo))
<label class="label">Estos son los numeros Fibonacci:  {{$fibo}}  </label>
@endif
</form>
</body>
</html>