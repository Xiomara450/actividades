
      alert('BIENVENIDOS......')
       
      const round = document.getElementById('rondas');
      const buttoncolor = document.getElementsByClassName('square');
      const btnEmpezar = document.getElementById("btnEmpezar");

      this.errorSinido = new Audio(',/storage/imagenes/error.mp3');
        this
         

      const amarillo = document.getElementById('amarillo');
      const azul = document.getElementById('azul');
      const rojo = document.getElementById('rojo');
      const verde = document.getElementById('verde');
     
     
      const colores = {
         amarillo,
         azul,
         rojo,
         verde
}
        
      colores.amarillo.addEventListener("click",colorElegido);
      colores.azul.addEventListener("click",colorElegido);
      colores.rojo.addEventListener("click",colorElegido);
      colores.verde.addEventListener("click",colorElegido);

      



      let secuencia = [];
      let nivel=-1;
      let subnivel =0;
      const espera1 =750;
      const espera2 =1500;
      const quitarColor =300;
      const cantColores=4;
      
       

      function iniciar(){
      secuencia =new Array(rondas);
      secuencia = secuencia.fill(0);
      secuencia = secuencia.map(n => Math.floor(Math.random() * cantColores));
      nivel = 0;
      subnivel = 0;

      boton.classList.add('hide');
      
      iluminarSecu();
   
}


     function terminarJ(){
       boton.classList.remove('hide');
       nivel = -1;
}


    function iluminarSecu(){
     for(let i= 0; i<= nivel; i++)
     {
      const color =numeroAColor(secuencia[i]);
      setTimeout(() => iluminarColor(color),espera1 * i);
   }
}
   

    function iluminarColor(color){
      colores[color].classList.add('light');
      setTimeout(() => apagarColor(color),iluminarColor);
}
 


    function apagarColor(color){
       colores[color].classList.remove('light');
}


    function numeroAColor(numero){
          switch (numero){
            case 0:	return 'amarillo';
            case 1:	return 'azul';
            case 2:	return 'rojo';
            case 3:	return 'verde';
   }
}


    function colorElegido(ev){

        if (nivel === -1) return;

       const nombreColor = ev.target.dataset.color;

        const numeroColor = numeroAColor(nombreColor);

        iluminarColor(nombreColor);


        if (numeroColor === secuencia[subnivel])
        {
            subnivel++;
            
            if (subnivel > nivel)
             {
               nivel++;
               if (nivel === rondas)
               {
                alert('ganaste');
                  terminarJ();
               }

             else
             {
             subnivel = 0;
             
              setTimeout(iluminarSecu,espera2);
             }
         }  
     }
     else
     {
     alert('perdidte');
       terminarJ();


     }
}
 

      function colorANumero(color){
         switch (color){
         case 'amarillo': return 0;
         case 'azul':	  return 1;
         case 'rojo':	  return 2;
         case 'verde':	  return 3;
   }
}









