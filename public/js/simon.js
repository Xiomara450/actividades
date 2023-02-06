
console.log('Bienvenidos a simon dice');

const amarillo = document.getElementById('amarillo');
const azul = document.getElementById('azul');
const rojo = document.getElementById('rojo');
const verde = document.getElementById('verde');
const boton = document.getElementById('btnEmpezar');

const colores = {
	amarillo,
	azul,
	rojo,
   verde,
}

const contenido = document.querySelector('contenedor');

const url= 'http://127.0.0.1:8000/SimonDiceController';

fetch (url)
 .then(res => res.json())
  .then(data => {
    
   });


   
 

const sonido = document.createElement('sonido');
this.errorSonido = new Audio('./storage/imagenes/error.mp3');


const sonidoIzquierdo =sonido('./storage/imagenes/4.mp3')
const sonidoDerecho   =sonido('./storage/imagenes/3.mp3')
const sonidoSuperior  =sonido('./storage/imagenes/2.mp3')
const sonidoInferior  =sonido('./storage/imagenes/1.mp3')







