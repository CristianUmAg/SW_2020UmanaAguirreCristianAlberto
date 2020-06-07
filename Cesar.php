<?php

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
    echo $cuenta.': Extencion del mensaje (caracteres)'.'<br>';
    echo $MEN.'<br>';
    $cesar = '';
    $avance = 0;

    
    for ($z=0; $z < $cuenta; $z++) {
      //code...
      $ALF = implode($alf);
      $pos = substr($ALF, $z, 1);
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
    echo $cesar;
  }
  else {
    echo '
    <form method="POST" acion="Cesar.php">
    Mensaje a cifar:
    <textarea min="5" max="75" name="mensaje"></textarea>
    <input type="submit" value="Cifrar">
    </form>';
  }
  


?>
