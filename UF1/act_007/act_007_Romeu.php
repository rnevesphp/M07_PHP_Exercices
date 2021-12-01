<?php
   // recibimos a través del metodo POST los datos del formulario 
   // en este caso son las operaciones que serían realizadas
   $operacion1 = $_POST['operacion1']; 
   $operacion2 = $_POST['operacion2'];  
   $operacion3 = $_POST['operacion3'];
   $operacion4 = $_POST['operacion4'];
   
   // aqui las variables o los valores introducidos por el usuario 
   $numero1 = intval($_POST['campo1']);
   $numero2 = intval($_POST['campo2']);
   $numero3 = intval($_POST['campo3']);
   $numero4 = intval($_POST['campo4']);
   $numero5 = intval($_POST['campo5']);

   // hacemos un condicional que si los dos primeros campos estan vacios nos salta un error 
   // como minimos deben haber dos numeros introducidos para calculo
   if(empty($numero1) and empty($numero2) ){ 
      // si los dos priemros numero estan vacios entonces nos saltará un mensaje 
      // en donde muestra que deben haber minimo dos numeros. 
      echo('<h2>Al menos dos números deben ser introducidos</h2>'); 

   }  else if (empty($numero1)) { 
      // si tan solo el segundo campo tiene un valor entonces no mostrará 
      // que debemos introducir un primer valor 
      echo('<h2>Introduce el primer numero, melón</h2>');

   } else if (empty($numero2)) { // y por ultimo sino 
      echo('<h2>Introduce el segundo numero, cabezón</h2>');

   } else { 

      // Si los numeros 3, 4 y 5 recibidos desde el formulario están vacíos haremos tan solo la primera operación 
      // que incluyen tan solo los dos primeros numeros 
      if (empty($numero3) and empty($numero4) and empty($numero5)) { 

         // OPERACION 1 
         // hacemos un condicional que según la operacion 1 seleccionada en nuestro html
         // una operacion u otra 
         if($operacion1 == '+'){
            // en este caso sumariamos el primer y el segundo numero introducido 
            $resultado1 = $numero1 + $numero2 ; 
            // la función echo nos imprimirá en pantalla el resultado de la suma.
            echo($numero1.' '.$operacion1.' '.$numero2.' = '.$resultado1.'<br>');
         } else if ($operacion1 == '-'){
            // la variable resultado1 almacenará el valor de la resta del numero1 y el numero2 
            $resultado1 = $numero1 - $numero2 ; 
            // el resultado sería imprimido por pantalla a través de la función echo().
            echo($numero1.' '.$operacion1.' '.$numero2.' = '.$resultado1.'<br>');
         }  else if ($operacion1 == '*'){
            $resultado1 = $numero1 * $numero2 ; 
            echo($numero1.' '.$operacion1.' '.$numero2.' = '.$resultado1.'<br>');
         }  else if ($operacion1 == '/'){
            $resultado1 = $numero1 / $numero2 ; 
            echo($numero1.' '.$operacion1.' '.$numero2.' = '.$resultado1.'<br>');
         }  else if ($operacion1 == '%'){ // aqui se realiza el calculo del porcentaje con los dos primeros campos introducidos
            $porc = $numero1 * $numero2 ; 
            $resultado1 = $porc / 100 ; 
            echo($numero1.' '.$operacion1.' '.$numero2.' = '.$resultado1.'<br>');
         }

         // en esta parte del condicional realizamos la siguiente accion 
         // en caso de que los campos 4 y 5 estén vacíos realizaremos tan solo las operaciones 1 y 2.  
      } else if (empty($numero4) and empty($numero5)) { 
         // este condicional actua sobre la operación seleccionada en el formulario, segun que operacion fue elegida 
         // entonces haremos una operacion u otra. 
         if($operacion1 == '+'){
            $resultado1 = $numero1 + $numero2 ; 
            echo($numero1.' '.$operacion1.' '.$numero2.' = '.$resultado1.'<br>');
         } else if ($operacion1 == '-'){
            $resultado1 = $numero1 - $numero2 ; 
            echo($numero1.' '.$operacion1.' '.$numero2.' = '.$resultado1.'<br>');
         }  else if ($operacion1 == '*'){
            $resultado1 = $numero1 * $numero2 ; 
            echo($numero1.' '.$operacion1.' '.$numero2.' = '.$resultado1.'<br>');
         }  else if ($operacion1 == '/'){
            $resultado1 = $numero1 / $numero2 ; 
            echo($numero1.' '.$operacion1.' '.$numero2.' = '.$resultado1.'<br>');
         }  else if ($operacion1 == '%'){
            $porc = $numero1 * $numero2 ; 
            $resultado1 = $porc / 100 ; 
            echo($numero1.' '.$operacion1.' '.$numero2.' = '.$resultado1.'<br>');
         }

         if($operacion2 == '+'){
            $resultado2 = $resultado1 + $numero3 ; 
            echo($resultado1.' '.$operacion2.' '.$numero3.' = '.$resultado2.'<br>');
         } else if ($operacion2 == '-'){
            $resultado2 = $resultado1 - $numero3 ; 
            echo($resultado1.' '.$operacion2.' '.$numero3.' = '.$resultado2.'<br>');
         }  else if ($operacion2 == '*'){
            $resultado2 = $resultado1 * $numero3 ; 
            echo($resultado1.' '.$operacion2.' '.$numero3.' = '.$resultado2.'<br>');
         }  else if ($operacion2 == '/'){
            $resultado2 = $resultado1 / $numero3 ; 
            echo($resultado1.' '.$operacion2.' '.$numero3.' = '.$resultado2.'<br>');
         }

         // este condicional actua sobre el utlimo campo donde se introducen los valores, 
         // en caso de que el ultimo campo esté vacio realizará las 3 operaciones de los 4 valores introducidos. 
      } else if (empty($numero5)) { 
         
         if($operacion1 == '+'){
            $resultado1 = $numero1 + $numero2 ; 
            echo($numero1.' '.$operacion1.' '.$numero2.' = '.$resultado1.'<br>');
         } else if ($operacion1 == '-'){
            $resultado1 = $numero1 - $numero2 ; 
            echo($numero1.' '.$operacion1.' '.$numero2.' = '.$resultado1.'<br>');
         }  else if ($operacion1 == '*'){
            $resultado1 = $numero1 * $numero2 ; 
            echo($numero1.' '.$operacion1.' '.$numero2.' = '.$resultado1.'<br>');
         }  else if ($operacion1 == '/'){
            $resultado1 = $numero1 / $numero2 ; 
            echo($numero1.' '.$operacion1.' '.$numero2.' = '.$resultado1.'<br>');
         }  else if ($operacion1 == '%'){
            $porc = $numero1 * $numero2 ; 
            $resultado1 = $porc / 100 ; 
            echo($numero1.' '.$operacion1.' '.$numero2.' = '.$resultado1.'<br>');
         }

         if($operacion2 == '+'){
            $resultado2 = $resultado1 + $numero3 ; 
            echo($resultado1.' '.$operacion2.' '.$numero3.' = '.$resultado2.'<br>');
         } else if ($operacion2 == '-'){
            $resultado2 = $resultado1 - $numero3 ; 
            echo($resultado1.' '.$operacion2.' '.$numero3.' = '.$resultado2.'<br>');
         }  else if ($operacion2 == '*'){
            $resultado2 = $resultado1 * $numero3 ; 
            echo($resultado1.' '.$operacion2.' '.$numero3.' = '.$resultado2.'<br>');
         }  else if ($operacion2 == '/'){
            $resultado2 = $resultado1 / $numero3 ; 
            echo($resultado1.' '.$operacion2.' '.$numero3.' = '.$resultado2.'<br>');
         }

         // operacion3 
         if($operacion3 == '+'){
            $resultado3 = $resultado2 + $numero4 ; 
            echo($resultado2.' '.$operacion3.' '.$numero4.' = '.$resultado3.'<br>');
         } else if ($operacion3 == '-'){
            $resultado3 = $resultado2 - $numero4 ; 
            echo($resultado2.' '.$operacion3.' '.$numero4.' = '.$resultado3.'<br>');
         }  else if ($operacion3 == '*'){
            $resultado3 = $resultado2 * $numero4 ; 
            echo($resultado2.' '.$operacion3.' '.$numero4.' = '.$resultado3.'<br>');
         }  else if ($operacion3 == '/'){
            $resultado3 = $resultado2 / $numero4 ; 
            echo($resultado2.' '.$operacion3.' '.$numero4.' = '.$resultado3.'<br>');
         }   
         
         // por ultimo en caso de que todos los campos esten rellenados con un valor realizará todas las operaciones 
         // seleccionadas por el usuario. 
      } else {

         if($operacion1 == '+'){
            $resultado1 = $numero1 + $numero2 ; 
            echo($numero1.' '.$operacion1.' '.$numero2.' = '.$resultado1.'<br>');
         } else if ($operacion1 == '-'){
            $resultado1 = $numero1 - $numero2 ; 
            echo($numero1.' '.$operacion1.' '.$numero2.' = '.$resultado1.'<br>');
         }  else if ($operacion1 == '*'){
            $resultado1 = $numero1 * $numero2 ; 
            echo($numero1.' '.$operacion1.' '.$numero2.' = '.$resultado1.'<br>');
         }  else if ($operacion1 == '/'){
            $resultado1 = $numero1 / $numero2 ; 
            echo($numero1.' '.$operacion1.' '.$numero2.' = '.$resultado1.'<br>');
         }  else if ($operacion1 == '%'){
            $porc = $numero1 * $numero2 ; 
            $resultado1 = $porc / 100 ; 
            echo($numero1.' '.$operacion1.' '.$numero2.' = '.$resultado1.'<br>');
         }

         if($operacion2 == '+'){
            $resultado2 = $resultado1 + $numero3 ; 
            echo($resultado1.' '.$operacion2.' '.$numero3.' = '.$resultado2.'<br>');
         } else if ($operacion2 == '-'){
            $resultado2 = $resultado1 - $numero3 ; 
            echo($resultado1.' '.$operacion2.' '.$numero3.' = '.$resultado2.'<br>');
         }  else if ($operacion2 == '*'){
            $resultado2 = $resultado1 * $numero3 ; 
            echo($resultado1.' '.$operacion2.' '.$numero3.' = '.$resultado2.'<br>');
         }  else if ($operacion2 == '/'){
            $resultado2 = $resultado1 / $numero3 ; 
            echo($resultado1.' '.$operacion2.' '.$numero3.' = '.$resultado2.'<br>');
         }

         // operacion3 
         if($operacion3 == '+'){
            $resultado3 = $resultado2 + $numero4 ; 
            echo($resultado2.' '.$operacion3.' '.$numero4.' = '.$resultado3.'<br>');
         } else if ($operacion3 == '-'){
            $resultado3 = $resultado2 - $numero4 ; 
            echo($resultado2.' '.$operacion3.' '.$numero4.' = '.$resultado3.'<br>');
         }  else if ($operacion3 == '*'){
            $resultado3 = $resultado2 * $numero4 ; 
            echo($resultado2.' '.$operacion3.' '.$numero4.' = '.$resultado3.'<br>');
         }  else if ($operacion3 == '/'){
            $resultado3 = $resultado2 / $numero4 ; 
            echo($resultado2.' '.$operacion3.' '.$numero4.' = '.$resultado3.'<br>');
         }   

         // OPERACION4
         if($operacion4 == '+'){
            $resultado4 = $resultado3 + $numero5 ; 
            echo($resultado3.' '.$operacion4.' '.$numero5.' = '.$resultado4.'<br>');
         } else if ($operacion4 == '-'){
            $resultado4 = $resultado3 - $numero5 ; 
            echo($resultado3.' '.$operacion4.' '.$numero5.' = '.$resultado4.'<br>');
         }  else if ($operacion4 == '*'){
            $resultado4 = $resultado3 * $numero5 ; 
            echo($resultado3.' '.$operacion4.' '.$numero5.' = '.$resultado4.'<br>');
         }  else if ($operacion4 == '/'){
            $resultado4 = $resultado3 / $numero5 ; 
            echo($resultado3.' '.$operacion4.' '.$numero5.' = '.$resultado4.'<br>');
         }  
         // cada operacion se realiza independiente de la otra pero los resultados son mostrados simultaneamente 
         // independiente de todos o tan solo los dos primeros tengan valores introducidos.
      }
   }
?>
