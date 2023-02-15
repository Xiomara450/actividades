
alert('BIENVENIDOS  ANIMALES')

const Granja= document.getElementById ("#juego");

const campo = Granja.getContext("2d");


    switch(e.keyCode)
    {
        case teclas.LEFT: 
            xCerdo= xCerdo - movimiento;
            dibujar(xCerdo, yCerdo);
            break; 

        case teclas.UP:
            yCerdo= yCerdo - movimiento;
            dibujar(xCerdo, yCerdo);
            break;

        case teclas.RIGHT:
            xCerdo= xCerdo + movimiento;
            dibujar(xCerdo, yCerdo);
            break;

        case teclas.DOWN:
            yCerdo= yCerdo + movimiento;
            dibujar(xCerdo, yCerdo);
            break;

    }

    



let fondo= {
    URL: "fondo.png",
    cargaOk: false
};

let vaca = {
    URL: "vaca.png",
    cargaOk: false
};

let pollo = {
    URL: "pollo.png",
    cargaOk: false
};

let cerdo = {   
    URL: "cerdo.png",   
    cargaOk: false   
};

fondo.imagen = new Imagen();
fondo.imagen.src= fondo.URL;
fondo.imagen.addEventListener("load", cargarFondo);

pollo.imagen= new Imagen();
pollo.imagen.src= pollo.URL;
pollo.imagen.addEventListener("load", cargarPollo);

cerdo.imagen = new Imagen();
cerdo.imagen.src= cerdo.URL;
cerdo.imagen.addEventListener("load", cargarCerdo);

vaca.imagen= new Imagen();
vaca.imagen.src= vaca.URL;
vaca.imagen.addEventListener("load", cargarVaca);


function cargarFondo()
{
    fondo.cargaOk= true;
    dibujar();
}

function cargarVaca()
{
    vaca.cargaOk= true;
    mantenerPosicion();
}

function cargarPollo()
{
    pollo.cargaOk= true;
    mantenerPosicion();
}

function cargarCerdo()
{
    cerdo.cargaOk= true;
    dibujar();
}




function mantenerPosicion()
{
    if(vaca.cargaOk)
    {
        var cantidad = aleatorio(1, 5);
        for(var i=0; i<cantidad; i++)
        {
            var x = aleatorio(0, 6);
            var y = aleatorio(0, 6);
            x = x*70;
            y = y*70;
            xVaca[i] = x;
            yVaca[i] = y; 
        }
    }

    if(pollo.cargaOk)
    {
        var cantidad = aleatorio(1, 5);
        for(var i=0; i<cantidad; i++)
        {
            var x = aleatorio(0, 6);
            var y = aleatorio(0, 6);
            x = x*70;
            y = y*70;
            xPollo[i] = x;
            yPollo[i] = y; 
        }
    }
    dibujar();
}




function dibujar()
{
    if (fondo.cargaOk== true)
        {
        lienzo.drawImage(fondo.imagen, 0, 0);
        }

    if (vaca.cargaOk== true)
    {
        for(var i=0; i<10; i++)
        {
            lienzo.drawImage(vaca.imagen, xVaca[i], yVaca[i]);  
        }
    }

    if (pollo.cargaOk== true)
    {
        for(var i=0; i<10; i++)
        {
            lienzo.drawImage(pollo.imagen, xPollo[i], yPollo[i]);       
        }
    }


    if (cerdo.cargaOk== true)
    {
        for(var i=0; i<10; i++)
        {
            lienzo.drawImage(cerdo.imagen, xCerdo[i], yCerdo[i]);       
        }
    }
}




function aleatorio(max, min)
{
    var numero_aleatorio = Math.floor(Math.random() * (max - min + 1)) + min;
    return numero_aleatorio;
}




