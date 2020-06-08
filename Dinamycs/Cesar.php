<?php

  echo '
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../Statics/Imagnes/icon.png">
    <link rel="stylesheet" href="../Statics/css/estilos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cesar</title>
  </head>
  <body>';
  if (isset($_POST['mensaje'])) {
    # code...
    $alf = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', '.', ',', '?', '!', ' '];
    $mensaje = $_POST['mensaje'];
    $mensajeC = str_replace("ñ", "N", $mensaje);
    $mensajeC1 = str_replace("Ñ", "N", $mensajeC);
    $mensajeC2 = str_replace("á", "A", $mensajeC1);
    $mensajeC3 = str_replace("Á", "A", $mensajeC2);
    $mensajeC4 = str_replace("é", "E", $mensajeC3);
    $mensajeC5 = str_replace("É", "E", $mensajeC4);
    $mensajeC6 = str_replace("í", "I", $mensajeC5);
    $mensajeC7 = str_replace("Í", "I", $mensajeC6);
    $mensajeC8 = str_replace("ó", "O", $mensajeC7);
    $mensajeC9 = str_replace("Ó", "O", $mensajeC8);
    $mensajeC10 = str_replace("ú", "U", $mensajeC9);
    $mensajeC11 = str_replace("Ú", "U", $mensajeC10);
    $MEN = strtoupper($mensajeC11);
    $cuenta = strlen($MEN);
    echo 'Extencion del mensaje (caracteres): '.$cuenta.'<br>';
    echo "El mensaje original es: ".$MEN.'<br>';
    $cesar = '';
    $avance = 26;
    $ALF = implode($alf);
    //echo 'Soy el implode: '.$ALF.'<br>';
    
    for ($z=0; $z < $cuenta; $z++) {
      //code...
      $pos = substr($MEN, $z, 1);
      $c2 = strripos($ALF, $pos) + $avance;
      //echo $c2.'c2';
      if ($c2 >= strlen($ALF)) {
        # code...
        $c2 -= strlen($ALF);
      }
      else {
        # code...
        $c2 = $c2;
      } 
      $cesar .= $ALF[$c2];
      //echo $c2.'<br>';
    }
    echo 'El mensaje Cifrado es: '.$cesar;
  }
  else {
    echo '
    <form method="POST" acion="Cesar.php">
    Mensaje a cifar:<br>
    <textarea min="5" max="75" name="mensaje" cols="50" rows="10" placeholder="Introduce un mensaje aqui porfavor" required></textarea><br>
    <input type="submit" value="Cifrar">
    </form>';
  }
  echo '
    </body>
  </html>';

?>
