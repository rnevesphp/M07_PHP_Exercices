<?php
  //Establecer la información local en castellano 
  setlocale(LC_TIME,"es_ES","spanish");
  /* Para cada letra que lleve un % delante se refiere a un atributo del tipo date ejemplo
  %A -> Se refiere a un dia de la semana escrito completamente
  %H -> se refiere a la hora escrita en el formato de 00 a 23
  %M -> Representación de dos dígitos de los minutos
  %S -> Representa los segundos 
  */
  echo strftime("Hoy es %A y son las %H:%M:%S es %d de %B de %Y");
  // el metodo strftime() formatea una fecha/hora local según una configuración local
  // %Y -> Representa los años escritos con 4 digitos ejemplo 2021 no 21
  // %B -> Representa los meses con su nombre completos 
  // %d -> Representa los días del mes con dos digitos
?> 