<?php
   // recibimos las dos valores del formulario 
   $num1 = $_GET["numero1"]; 
   $num2 = $_GET["numero2"]; 
   // definimos un operador 
   $operador = $_GET["operaciones"]; 

   if ($operador == "sumar") { 
      $operacion = $num1 + $num2; 
   } else if ($operador == "restar") { 
      $operacion = $num1 - $num2; 
   } else if ($operador == "multiplicar") { 
      $operacion = $num1 * $num2 ; 
   } else if ($operador == "dividir") { 
      $operacion = $num1 / $num2 ; 
   } else if ($operador == "porc") {
      $operacion1 = $num1 * $num2; 
      $operacion = $operacion1 / 100; 
   }
   echo("<h2>Resultado: </h2>" . $operacion);
?>