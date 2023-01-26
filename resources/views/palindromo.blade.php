<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PALINDROMO</title>
</head>
<body>
<STYle>
body{
background-image: url('storage/imagenes/fondo3.png');
}
h1{
color:#08abf7;
text-align: center;
font-size: 50px;
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
background-color: #5ff37f;
font-weight: 600;
}
.boton:hover{
background: #f0a574;
color: #037beb;
}
.label{
color: #080808;
font-size: 3vh;
text-align: center;
display: block;
font-weight: 600;
}
.pre{
color: #000000;
text-align: center;
display: block;
font-size: 15px;
}
a{
text-align: center;
display: block;
color: #ff0000;
}
</STYle>
<h1>PALINDROMO</h1>
<pre class="pre">
    LEONARDO DE PISA [Fibonacci]
    Considerado como el primer algebrista de Europa (cronológicamente hablando)  y como el introductor del sistema numérico árabe, fue educado de niño en Argelia, 
    donde su padre era funcionario  de aduanas, y donde aprendió "el ábaco, al uso 
    de los indios". Después tuvo manera, por razones de tipo comercial, de conocer  todo lo que de esta ciencia se 
    enseñaba en Egipto, en Siria, en Sicilia y en Provenza </pre>

  
  
<img src="{{asset('storage/imagenes/imagen3.png')}}"class="imgf" alt="">


<form action={{ route('palin.palindromo') }} method="POST">
@csrf
@method('POST')

<input type="text" class="input" name="palabra" placeholder="Escribe una palabra">
<button type="submit" class="boton">Validar</button>

<a href="/">Regresar</a>

@if (isset($palin,$palabra))
<label class="label"> La palabra {{$palin}} es: {{$palabra}} </label>
@endif

</form>
</body>
</html>