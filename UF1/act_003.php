<?php
   // Ejercicio 3A - Area y perimetro del circulo//
   echo("<h3>Calculo del circulo </h3> "); 
   // creamos una variable y le atribuimos un numero como valor
   $radioIntro = 12; 
   // calcularemos el area y el perimetro de un circulo 
   $perCirculo = 2*3.14*$radioIntro; 
   $areaCirculo = 3.14*$radioIntro**2; 
   echo("<p>Este es el area del Circulo: ".$areaCirculo."</p><p>Este es el perimetro: ".$perCirculo."</p><br>");
   /////////////////////////////////////////////////////////////////////////////////////////////////////////////

   // Ejercicio 3B - Area y perimetro del cuadrado// 
   echo("<h3>Calculo del cuadrado</h3> "); 
   $ladoCuadrado = 12; // le damos un valor al lado de un cuadrado 
   $perCuadrado = $ladoCuadrado * 4; // el valor del perimetro de un cuadrado se obtiene sumando todos sus lados
   $areaCuadrado = $ladoCuadrado * $ladoCuadrado; //El valor del area se obtiene multiplicando lado por lado
   echo("<p>Este es el area del cuadrado: ".$areaCuadrado."</p><p>Este es el perimetro: ".$perCuadrado."</p><br>");
   /////////////////////////////////////////////////////////////////////////////////////////////////////////////

   // Ejercicio 3C - Modulo de un numero (restante)// 
   echo("<h3>Modulo de dos numeros</h3> "); 
   $numeroIntro01 = 7; // le damos un valor al primer numero; 
   $numeroIntro02 = 5; // le damos un valor al segundo numero; 

   $calMod = $numeroIntro01 % $numeroIntro02; // hacemos el calculo correspondiente 
   echo("<p>Este es el resto del calculo: ".$calMod."</p><br>");
   /////////////////////////////////////////////////////////////////////////////////////////////////////////////

   // Ejercicio 3D - Factorial  // 
    echo("<h3>Factorial de un numero</h3> "); 
    $numero = 4;  // Creamos una variable y le atribuimos un valor 
    
    function CalFactorial($numero){ // Creamos una funcion que hará el calculo del factorial
      $total = 1 ; //creamos una variable total y le damos el valor de 1
      for($iCont = $numero; $iCont >= 1; $iCont--){
          // a la nueva variable iCont le atribuimos el valor del numero introducido 
          // para iCont siendo mayor que 1 pues el por cada vez que el bucle repita se le decrementará un numero
          
          //Para cada iteración del bucle multiplcamos el valor de iCont por el total que devolveria iCont*1
          $total = $total * $iCont; 

          // Para cada iteración del bucle sacamos el valor del numero introducido decrementado
          echo("Numero decreciente: ".$iCont."<br>"); 
        }
        return $total; //La función debe de devolver un total; 
    }
    // Imprimos el valor del factorial del numero introducido
    echo("El factorial del numero ".$numero." es: ".CalFactorial($numero)) ; 
    
?> 