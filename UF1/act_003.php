<?php
   // pedimos un numero 
   echo "Introduce un numero: "; 
   // Con la funcion fscanf(STDIN,"$s", $numIntro) le atribuimos el valor introducido a una variable
   fscanf(STDIN,"$",$numIntro);
   // echo $numIntro; 

   // calcularemos el area y el perimetro de un circulo 
   $perCirculo = 2*3.14*$numIntro; 
   $areaCirculo = 3.14*$numIntro**2; 

   echo("Este es el area del Circulo: ".$areaCirculo." y este es el perimetro: ".$perCirculo);
?> 