<?php
   // obtenemos el numero introducido en el input HTML 
   $numIntroducido = $_POST["numero1"] ; 
   // creamos una funcion que recibe un parametro de entrada
   function numPrimo($param) { 
      // hacemos un condicional que 
      // si la resta de la division es 0 entonces nos mostrará este mensaje
      if ($param % 2 == 0) {
         // declaramos una variable con el mensaje
         $msg = "El numero ". $param ." no es primo"; 
      }// sino nos mostrará el siguiente mensaje
      else {
         $msg = "El numero ". $param ." es primo";
      }
   // y el valor devuelto es la variabe declarada como mensaje.      
   return $msg; 
   }
   // y con el numero introducido llamamos la función
   $num = numPrimo($numIntroducido); 
   // y lo imprimmimos por pantalla
   echo($num);
?> 