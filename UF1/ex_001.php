<?php
   // Definimos una variable "nombre" que alamacenará el nombre de un alumno como valor
   $nombre = "Romeu"; 
   // Las Variables `primerAp` y `segundoAp` almacenarán los apellidos de cada alumno
   $primerAp = "Neves"; 
   $segundoAp = "Rabelo"; 
   // La variable `ageAlumno` almacena su edad como valor 
   $ageAlumno = "20"; 
   // La variable `fechaNac` almacena la fecha de nacimiento del alumno 
   $fechaNac = "21/05/2001";
   // La variable `telefonoAlumno` almacena su numero de tlf
   $telefonoAlumno = 665859515; 
   // La variable `correoAlumno` alamcena el correo del alumno como valor 
   $correoAlumno = "nevesromeu21@gmail.com"; 
   // La variable `actTrabajando` almacena si el alumno trabaja o no 
   $actTrabajando = "No" ; 
   // La variable `altura` almacena la altura de cada alumno
   $altura = 1.84; 
   // La variable `localidadPueblo` alamcena el pueblo/ciudad en el que vive el alumno
   $localidadPueblo = "St. Boi de Llobregat"; 

   echo("<h2>PATRÓN DE LOS ALUMNOS LES SALINES</h2>"); 
   echo("Nombre: " . $nombre."<br>"); 
   echo("Apellidos: ".$primerAp." ".$segundoAp . "<br>");
   echo("Edad: ". $ageAlumno. "<br>"); 
   echo("Fecha de nacimiento: ".$fechaNac. "<br>"); 
   echo("Nº de Telefono: ". $telefonoAlumno."<br>"); 
   echo("Mi correo: ".$correoAlumno."<br>"); 
   echo("Situacion laboral: ".$actTrabajando."<br>"); 
   echo("Estatura: ".$altura."<br>");
   echo("Ciudad ". $localidadPueblo);
?>