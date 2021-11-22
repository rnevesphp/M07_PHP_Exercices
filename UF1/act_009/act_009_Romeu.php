<?php
   $numIntroducido = $_POST["numero1"] ; 
   function numPrimo($param) { 
      if ($param % 2 == 0) {
         $msg = "El numero ". $param ." no es primo"; 
      } else {
         $msg = "El numero ". $param ." es primo";
      }
   return $msg; 
   }
   $num = numPrimo($numIntroducido); 
   echo($num);
?> 