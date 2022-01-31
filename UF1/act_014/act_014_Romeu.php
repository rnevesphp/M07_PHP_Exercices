<?php
   $userPassword = $_POST["contrasena"]; 

    if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $userPassword)) {
      echo 'La contraseña no cumple los requisitos!';
    } else { 
      echo 'La contraseña es segura!';
    }
   // if(preg_match('/^{8,12}$/', $userPassword)) {
   //    echo('La contraseña es larga!<br>');
   // } else { 
   //    echo('La contraseña no cumple los requisitos! <br> Demasiado corta!');
   // }
   
   // if(preg_match('/^(?=.*[A-Z])$/', $userPassword)) {
   //    echo('La contraseña contiene minusculas!<br>');
   // } else {
   //    echo('La contraseña no cumple los requisitos! <br>  Faltan mayusculas!');
   // }

   // if (preg_match('/^(?=.*[a-z])$/', $userPassword))  { 
   //    echo('La contraseña contiene minusculas!<br>');
   // } else { 
   //    echo('La contraseña no cumple los requisitos! <br>  Faltan minusculas!');
   // }

   // if(preg_match('/^(?=.*\d)$/', $userPassword)) { 
   //    echo('La contraseña contiene numeros!<br>');
   // } else { 
   //    echo('La contraseña no cumple los requisitos! <br>  Faltan numeros!');
   // }

   // if(preg_match('/^[!@#$%_-]$/', $userPassword)) { 
   //    echo('La contraseña contiene caracteres especiales!<br>');
   // } else { 
   //    echo('La contraseña no cumple los requisitos! <br>  Faltan caracteres especiales!');
   // }

   // echo('<h5>Contraseña Segura!</h5>');





   // if(!preg_match('/^(?=.*[a-z])$/', $userPassword)) {
   //    echo('La contraseña contiene caracteres minusculos <br>');
   // } else { 
   //    echo('La contraseña contiene no caracteres minusculos <br>');
   // }

   // if(!preg_match('/^(?=.*\d)$/', $userPassword)) {
   //    echo('La contraseña contiene numeros <br>');
   // } else { 
   //    echo('La contraseña no contiene numeros <br>');
   // }

   // if(!preg_match('/^[!@#$%_-]$/', $userPassword)) {
   //    echo('La contraseña contiene caracteres especiales <br>');
   // } else { 
   //    echo('La contraseña contiene no caracteres especiales <br>');
   // }
 
   
   // entre el incio de la contraseña " ^ " hasta su final " $ " deben haber: 
   // (?=.*\d) ==> Minimo un numero 
   // (?=.*[A-Za-z]) ==> Un caracter letra 
   // [0-9A-Za-z!@#$%] ==> debe contener minimo un caracter especial 
   // {8,12} ==> Debe de haber minimo 8 caracteres
   
?>