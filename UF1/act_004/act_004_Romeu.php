<?php
   // Almacenamos en una lista los productos que tenemos disponibles
   $listaDeProductos = array("Switch", "Portatil", "Torre Gaming", "XBOX", "Playstation"); 
   // Añadimos una lista con valores
   $precioProductos = array (120, 280, 440, 230, 320); 
   // Otra con valores que representan gastos de envio 
   $gastosEnvioProductos = array(15, 30, 50, 35, 45); 
   // Otra con valores que representan descuentos
   $descuentoProductos = array(20, 40, 60, 45, 55); 

   echo("<h2>Productos disponibles</h2> <h3>Producto X Precio</h3>");
   // Imprimimos todos los productos y sus respectivos precios
   echo(
      $listaDeProductos[0]." > ".$precioProductos[0]."€"."<br>". 
      $listaDeProductos[1]." > ".$precioProductos[1]."€"."<br>".
      $listaDeProductos[2]." > ".$precioProductos[2]."€"."<br>".
      $listaDeProductos[3]." > ".$precioProductos[3]."€"."<br>".
      $listaDeProductos[4]." > ".$precioProductos[4]."€"."<br>"
   );

   echo("<h3>Producto X Descuento X Gastos de Envio</h3>");
   echo(
      $listaDeProductos[0]." > ".$descuentoProductos[0]."€  de Descuento + ".$gastosEnvioProductos[0]."€  de Gastos de Envio <br>".
      $listaDeProductos[1]." > ".$descuentoProductos[1]."€  de Descuento + ".$gastosEnvioProductos[1]."€  de Gastos de Envio <br>".
      $listaDeProductos[2]." > ".$descuentoProductos[2]."€  de Descuento + ".$gastosEnvioProductos[2]."€  de Gastos de Envio <br>".
      $listaDeProductos[3]." > ".$descuentoProductos[3]."€  de Descuento + ".$gastosEnvioProductos[3]."€  de Gastos de Envio <br>".
      $listaDeProductos[4]." > ".$descuentoProductos[4]."€  de Descuento + ".$gastosEnvioProductos[4]."€  de Gastos de Envio <br>"
   ); 

   // Hacemos la suma de todos los productos con sus gastos de envio
   $prodConGastos0 = $precioProductos[0] + $gastosEnvioProductos[0];
   $prodConGastos1 = $precioProductos[1] + $gastosEnvioProductos[1];
   $prodConGastos2 = $precioProductos[2] + $gastosEnvioProductos[2];
   $prodConGastos3 = $precioProductos[3] + $gastosEnvioProductos[3];
   $prodConGastos4 = $precioProductos[4] + $gastosEnvioProductos[4];
   
   // Productos con descuento aplicado 
   $producConDesc0 = $prodConGastos0 - $descuentoProductos[0];
   $producConDesc1 = $prodConGastos1 - $descuentoProductos[1];
   $producConDesc2 = $prodConGastos2 - $descuentoProductos[2];
   $producConDesc3 = $prodConGastos3 - $descuentoProductos[3];
   $producConDesc4 = $prodConGastos4 - $descuentoProductos[4];
   
   // Producto precio final 
   $prodPrecioFinal0 = $producConDesc0; 
   $prodPrecioFinal1 = $producConDesc1;  
   $prodPrecioFinal2 = $producConDesc2;   
   $prodPrecioFinal3 = $producConDesc3; 
   $prodPrecioFinal4 = $producConDesc4; 
   
   // Mostramos por pantalla los precios finales de cada producto
   echo("<h3>Precio Final con Descuento Aplicado</h3>");
   echo(
      $listaDeProductos[0]." > ".$prodPrecioFinal0."€ <br>".
      $listaDeProductos[1]." > ".$prodPrecioFinal1."€ <br>".
      $listaDeProductos[2]." > ".$prodPrecioFinal2."€ <br>".
      $listaDeProductos[3]." > ".$prodPrecioFinal3."€ <br>".
      $listaDeProductos[4]." > ".$prodPrecioFinal4."€ <br>"
   );

   // Hacemos un var_dump de cada variable que almacena cada array
   echo("<h2>var_dump de cada Array</h2>");
   var_dump($listaDeProductos);echo("<br>"); 
   var_dump($gastosEnvioProductos);echo("<br>"); 
   var_dump($precioProductos);echo("<br>"); 
   var_dump($descuentoProductos);
?> 