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
   
   $factorial = 1; 
   $numero = 7; 

   // Hacemos un bucle for que mientras la variable $i sea menor que el $numero se incrementará un numero más una vez tengamos el valor hacemos los debidos calculos
   for ($i = 1; $i <= $numero; $i--){ 
     $factorial = $factorial * $i; 
   } 
   echo("El factorial del numero ".$numero." es: ".$factorial) ; // Imprimos el valor del factorial del numero introducido 


?> 