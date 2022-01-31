<?php
   // // Nombre del alumno 
   $nombreAlumno = $_POST['entradaNombre'] ; 
   // // Apellidos 
   $apellidos = $_POST['entradaApellidos'] ; 
   // // fecha de nacimiento
   $fechaNac = strval($_POST['fechaNacimiento']) ; 
   // // genero alumno 
   $generoAlumno = $_POST['genero'] ; 
   // // Ciclo Medio o Superior 
   $cicloCurso = $_POST['cicloCursado'] ;
   // // Primer o Segundo año del ciclo.
   $anoCurso = $_POST['curso']; 
   // // correo del alumno 
   $correoAlumno = $_POST['correo']; 
   // // telefono del alumno 
   $telAlumno = $_POST['tlfContato']; 
  
   // <====================================> //
   // creamos una variable con la fecha del dia actual
   $dia_actual = date("Y-m-d");
   // creamos una variable que almacenará la edad del alumno 
   // cogemos la fecha de hoy y la fecha de nacimiento y hacemos la diferencia utilizando el date_diff 
   // de la fecha actual y la que hemos introducido 
   $edad_diff = date_diff(date_create($fechaNac), date_create($dia_actual));
   // <====================================> //
   
   // // recibiendo los datos mediante el método POST
   if ($_POST['pag'] == '1') { 
      $pagWeb = 'Sí'; 
   } else if ($_POST['pag'] == '2')  { 
      $pagWeb = 'No';
   }
   // dirección pag web 
   
   
   // // carta de presentación 
   $cartaPresent = $_POST['cartaDePresentacion']; 
   
   // <===========================ERRORES===========================> //
   
   // Error nombre //
   if (empty($_POST['entradaNombre'])) { 
      $nameErr = 'Campo nombre vacío!<br>'; 
      echo($nameErr); 
   } else { 
      echo("Nombre: ". $nombreAlumno.'<br>');
   }
   
   // Error apellido //
   if (empty($_POST['entradaApellidos'])) { 
      $surnameErr = 'Campo apellido vacío!<br>'; 
      echo($surnameErr); 
   } else { 
      echo("Apellidos: ".$apellidos.'<br>'); 
   }
   
   // error fecha nacimiento // 
   if (empty($_POST['fechaNacimiento'])) { 
      $nacimientoErr = 'Campo fecha vacío!<br>';
      echo($nacimientoErr);
   } else { 
      echo("Fecha de Nacimiento: ".$fechaNac.'<br>'); 
   }
   
   // error genero // 
   if (empty($_POST['genero'])) { 
      $errGenero = 'campo genero vacío! <br>'; 
      echo($errGenero);
   } else { 
      // genero del alumno
      if ($_POST['genero'] == '1') { 
         $generoAlumno = 'Hombre'; 
      } else if ($_POST['genero'] == '2') { 
         $generoAlumno = 'Mujer';
      }
      echo("Género: ".$generoAlumno.'<br>'); 
   }

   // // Error ciclo vacío // 
   if(empty($_POST['cicloCursado'])) { 
      $errCiclo = 'Campo Ciclo Cursado vacío!<br>'; 
      echo($errCiclo); 
   } else { 
      // Que ciclo está cursando
      if ($_POST['cicloCursado'] == '1') { 
         $cicloCurso = 'Grado Medio'; 
      } else if ($_POST['cicloCursado'] == '2') { 
         $cicloCurso = 'Grado Superior';
      }
      echo("Ciclo: ".$cicloCurso.'<br>'); 
   }
   
   // // Error año > curso // 
   if (empty($_POST['curso'])) { 
      $errCurso = 'Campo año de curso vacío! <br>'; 
      echo($errCurso); 
   } else { 
      if ($_POST['curso'] == '1') { 
         $anoCurso = '1º Año<br>'; 
      } else if ($_POST['curso'] == '2') { 
         $anoCurso = '2º Año';
      }
      echo("Año: ".$anoCurso.'<br>'); 
   }

   // // asignatura de preferencia del alumno
   // // Asignatura de Preferencia
   switch ($_POST['asignatura']){ 
      case 1: 
         echo 'Asignatura preferida: PHP<br>'; 
         break; 
      case 2: 
         echo 'Asignatura preferida: PYTHON <br>'; 
         break; 
      case 3 : 
         echo 'Asignatura preferida: JAVASCRIPT<br>'; 
         break;
   }
   
   // // error correo //   
   if (empty($_POST['correo'])) {
      $errCorreo = 'Campo correo vacío!<br>'; 
      echo($errCorreo); 
   } else {
      echo("Correo: ".$correoAlumno.'<br>'); 
   }
   
   // // error telefono // 
   if (empty($_POST['tlfContato'])) { 
      $errTelefono = 'Campo telefono vacío!<br>'; 
      echo($errTelefono); 
   } else {
      echo("Teléfono: ".$telAlumno.'<br>'); 
   }


   // // Error trabajo actual // 
   if (empty($_POST['job'])) { 
      $errJob = 'Campo Trabajo vacío!<br>'; 
      echo($errJob);
   } else { 
      // Recibiendo los datos del formulario
      if ($_POST['job'] == '1') { 
         $trabajoAct = 'Sí'; 
      } else if ($_POST['job'] == '2') { 
         $trabajoAct = 'No';
      }
      echo("Trabaja: ".$trabajoAct.'<br>'); 
   }

   // tiene o no pag web
   echo ('Posee página web: '.$pagWeb.'<br>') ;
   // dirección pag web 
   if ($pagWeb == 'Sí') {
      $dirPagWeb = $_POST['pagWeb']; 
      echo('Dirección web: '.$dirPagWeb.'<br>');
   } else { 
      $dirPagWeb = ' <br>'; 
      echo('Dirección web: '.$dirPagWeb); 
   }

   // // Error Area de Interés //    
   if (empty($_POST['areadeInteres'])) { 
      $errAreaInteres = 'Campo Area de interes vacio! <br>';
      echo($errAreaInteres); 
   } else { 
      if ($_POST['areadeInteres'] == '1') { 
         $areaInteres = 'Desarrollador FullStack'; 
      } else if ($_POST['areadeInteres'] == '2')  { 
         $areaInteres = 'Desarrollador FrontEnd';
      } else if ($_POST['areadeInteres'] == '3') { 
         $areaInteres = 'Desarrollador BackEnd';
      }
      echo("Área de Interés: ".$areaInteres.'<br>'); 
   }

   // carta de presentación
   echo('Carta de presentación: '.$cartaPresent.'<br>'); 

   // imprimimos la diferencia entre fechas con el formato año utilizando la 
   // expresión regular %Y -> hace referencia a año
   echo ($edad_diff->format('%y<br>'));

   echo("El alumno ".$nombreAlumno." ".$apellidos." tiene ".$edad_diff->format('%y'). " años y está cursando ".$anoCurso." de ".$cicloCurso. " de DAW.");
   
   
   
?>