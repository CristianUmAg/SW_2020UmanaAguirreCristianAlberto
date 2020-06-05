<?php

  echo "
  <!DOCTYPE html>
  <html lang='en'>
  <head>
    <meta charset='UTF-8'>
    <link href='https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300&display=swap' rel='stylesheet'>
    <link rel='shortcut icon' href='../Statics/Imagenes/icon.png'>
    <link rel='stylesheet' href='../../Statics/Estilos/estilos.css'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>F Recpuesta A7</title>
  </head>
  <body>";
  $nombre = $_POST['nombre'];
  $apPat = $_POST['apPat'];
  $apMat = $_POST['apMat'];
  $fechaNac = $_POST['fechaNac'];
  $colegio = $_POST['colegio'];
  $usuario = $_POST['usuario'];
  $rfc = $_POST['rfc'];
  $password = $_POST['password'];

  if (preg_match('/(^[A-Z][a-zñÑáéíóúÁÉÍÓÚ]+$)|(^[A-Z][a-zñÑáéíóúÁÉÍÓÚ]+[ ][A-Z][a-zñÑáéíóúÁÉÍÓÚ]+$)/', $nombre)) {
    # code...
    echo 'El Nombre'.$nombre.' es Valido'.'<br>';
  }
  else {
    echo 'El Nombre'.$nombre.' es invalido'.'<br>';
  }
  if (preg_match('/(^[A-Z][a-zñÑáéíóúÁÉÍÓÚ]+$)/', $apPat)) {
    # code...
    echo 'El Apellido Paterno '.$apPat.' es Valido'.'<br>';
  }
  else {
    echo 'El Apellido Paterno ' . $apPat . ' es Invalido'.'<br>';
  }
  if (preg_match('/(^[A-Z][a-zñÑáéíóúÁÉÍÓÚ]+$)/', $apPat)) {
    # code...
    echo 'El Apellido Paterno ' . $apPat . ' es Valido'.'<br>';
  } 
  else {
    echo 'El Apellido Materno ' . $apMat . ' es Invalido'.'<br>';
  }
  if (preg_match('/[0-9]{4}+[\-]+[0-9]{2}+[\-]+[0-9]{2}+/', $fechaNac)) {
    # code...
    echo 'La Fecha de Nacimiento '.$fechaNac.' es Valida'.'<br>';
  }
  else {
    echo 'La Fecha de Nacimiento ' . $fechaNac . ' es Invalida';
  }
  echo 'El Colegio '.$colegio.' es Valido'.'<br>';
  if (preg_match('/([a-zA-Z0-9][ ]*){10,20}+/', $usuario)) {
    # code...
    echo 'El Usuario '.$usuario.' es Valido'.'<br>';
  }
  else {
    echo 'El Usuario '.$usuario.' es Invalido'.'<br>';
  }
  if (preg_match('/^[A-Z]{4}[0-9]{6}[0-9A-Z]{3}$/', $rfc)) {
    # code...
    echo 'El RFC ' . $rfc . ' es Valido'.'<br>';
  }
  else {
    echo 'El RFC ' . $rfc . ' es Ivnalido'.'<br>';
  }
  if (preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!-+])([A-Za-z\d!-+]|[^ ]){10,20}$/', $password)) {
    # code...
    echo 'La contraseña es Valida'.'<br>';
  }
  else {
    echo 'La contraseña '.$password.' es Invalida'.'<br>';
  }
  echo "
    </body>
  </html>";

?>
