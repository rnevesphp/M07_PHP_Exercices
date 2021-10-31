<?php
   $nombre = "Romeu"; 
   $primerAp = "Neves"; 
   $segundoAp = "Rabelo"; 
   $ageAlumno = "20"; 
   $fechaNac = "21/05/2001";
   $telefonoAlumno = 665859515; 
   $correoAlumno = "nevesromeu21@gmail.com"; 
   $actTrabajando = "No"; 
   $altura = 1.84; 
   $localidadPueblo = "St. Boi de Llobregat"; 

   // creamos una varoiable que almacene todos los modulos del CFGS DAW2 
   $numModulos = array("MO2-BD","MO3-POO","MO5-ED","MO6-DC","MO7-DS","MO8-DA","MO9-DI","M12-PS");

   // creamos una variable que indica el modulo favorito 
   $modFav = $numModulos[1];

   echo("<h2>PATRÓN DE LOS ALUMNOS LES SALINES</h2>"); 
   echo("Nombre: " . $nombre."<br>"); 
   echo("Apellidos: ".$primerAp." ".$segundoAp . "<br>");
   echo("Edad: ". $ageAlumno. "<br>"); 
   echo("Fecha de nacimiento: ".$fechaNac. "<br>"); 
   echo("Nº de Telefono: ". $telefonoAlumno."<br>"); 
   echo("Mi correo: ".$correoAlumno."<br>"); 
   echo("Situacion laboral: ".$actTrabajando."<br>"); 
   echo("Estatura: ".$altura."<br>");
   echo("Ciudad ". $localidadPueblo."<br>");
   echo("Este es mi modulo favorito: ". $modFav);

?>