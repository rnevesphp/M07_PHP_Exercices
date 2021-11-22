<?php 
   //recibimos un numero introducido por el usuario
   $numeroIntroducido = $_POST["numero1"]; 
   // hacemos un condicional para que el numero introducido sea mayor que 1 
   if ($numeroIntroducido < 1) { 
      echo "el numero debe de ser mayor que uno para descomponerse"; 
   } else {
      // esta funcion hara la descomposicion del numero introducido
      function descomponerFact($param) { 
         // creamos una variable y la llamamos factor primo y el agoritmo lo utilizará para saber cual es el factor primo
         $factorPrimo = 2 ; 
         do {
            if ($param % $factorPrimo == 0){

            } else { 
               $factorPrimo++; 
            }
         } while ($param > 1); 
      }
   }

?> 