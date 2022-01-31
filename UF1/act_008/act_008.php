<?php
   // creamos un array con varios valores
   // $vector = [4,5,6,7,8,9,9,0,00,1] ;
   $vector = [rand(0, 50),rand(0, 50),rand(0, 50),rand(0, 50),rand(0, 50),rand(0, 50),rand(0, 50),rand(0, 50),rand(0, 50),rand(0, 50),rand(0, 50),rand(0, 50),rand(0, 50),rand(0, 50),rand(0, 50)] ;
   // inicializamos una variable en 0 
   $numMayor = 0;
   // inicializamos un contador en 0
   $cont = 0;
   // una variable en estilo array
   $posiciones = [] ;
   // y en un principio una variable sin ningún tipo de valor
   $str_pos ;

   // para cada elemento del array vector llamado como $key
   foreach ($vector as $key) {
      // hacemos que si el valor $key es menor que $numMayor que es 0 
      if ($key > $numMayor) {
         // la variable $numMayor pasa a tener el valor de $key
         $numMayor = $key ;
      }
   }

   // contamos el tamaño del array vector con la función count y para la variable num menor que el array sumara uno por cada iteración 
   for ($num=0; $num < count($vector) ; $num++) { 
      
      if ($vector[$num] == $numMayor) {
         $cont++ ;
         array_push($posiciones, $num) ;
      }
   }

   // el la variable str_pos utiliza el método de implode que une elementos de un array en un string
   $str_pos = implode(", ", $posiciones) ;
   echo "El numero más grande es el ".$numMayor." y hay una cantidad de ".$cont." en las posiciones " .$str_pos. " del vector " ;
?>