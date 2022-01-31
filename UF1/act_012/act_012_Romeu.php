<?php
// generamos un numero aleatorio entre 1 y 9
$randNum = rand(0, 9); 

// imprimimos el numero aleatorio generado en una etiqueta de titulo 2 
echo('<h2> Este es el numero aleatorio: '.$randNum.'<h2>'); 
calcAleatorio($randNum);
// creamos una funcion con un parametro de entrada 
function calcAleatorio ($pEntrada) { 
   // hacemos un switch que actua como un if 
   switch ($pEntrada) { 
      // caso el numero sea 0 haremos un for que hará lo siguiente
      case 0: 
         // declaramos una variable i que tendrá 0 como valor inicial y que se incrementará siempre y cuando sea menor que 11;
         for ($i = 0; $i < 11; $i++) { 
            // la variable tabla almacena el resultado de la operacion del numero introducido por la variable i 
            $tabla = $pEntrada * $i; // y la operación se realizará cada vez que la variable i haga una iteración
            // imprimimos por pantalla el numero que se recibe y lo multiplicamos por la variable i e imprimimos el el resultado
            // añadiendo un salto de linea al final
            echo($pEntrada.' X '.$i.' = '.$tabla.'<br>');
         }
         break; 
      case 1:
         for ($i = 0; $i < 11; $i++) { 
         $tabla = $pEntrada * $i; 
            echo($pEntrada.' X '.$i.' = '.$tabla.'<br>');
         }
         break;
      case 2:
         for ($i = 0; $i < 11; $i++) { 
            $tabla = $pEntrada * $i; 
            echo($pEntrada.' X '.$i.' = '.$tabla.'<br>');
         }
         break;
      case 3: 
         for ($i = 0; $i < 11; $i++) { 
            $tabla = $pEntrada * $i; 
            echo($pEntrada.' X '.$i.' = '.$tabla.'<br>');
         }
         break;
      case 4:
         for ($i = 0; $i < 11; $i++) { 
            $tabla = $pEntrada * $i; 
            echo($pEntrada.' X '.$i.' = '.$tabla.'<br>');
         }
         break;
      case 5:
         for ($i = 0; $i < 11; $i++) { 
            $tabla = $pEntrada * $i; 
            echo($pEntrada.' X '.$i.' = '.$tabla.'<br>');
         }
         break;
      case 6:
         for ($i = 0; $i < 11; $i++) { 
            $tabla = $pEntrada * $i; 
            echo($pEntrada.' X '.$i.' = '.$tabla.'<br>');
         }
         break;
      case 7: 
         for ($i = 0; $i < 11; $i++) { 
            $tabla = $pEntrada * $i; 
            echo($pEntrada.' X '.$i.' = '.$tabla.'<br>');
         }
         break;
      case 8:
         for ($i = 0; $i < 11; $i++) { 
            $tabla = $pEntrada * $i; 
            echo($pEntrada.' X '.$i.' = '.$tabla.'<br>');
         }
         break;
      case 9:
         for ($i = 0; $i < 11; $i++) { 
            $tabla = $pEntrada * $i; 
            echo($pEntrada.' X '.$i.' = '.$tabla.'<br>');
         }
         break;
      case 10:
         for ($i = 0; $i < 11; $i++) { 
            $tabla = $pEntrada * $i; 
            echo($pEntrada.' X '.$i.' = '.$tabla.'<br>');
         }
         break;
   }
}

?>