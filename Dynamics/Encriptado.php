<?php

  echo"
  <!DOCTYPE html>
  <html lang='en'>
  <head>
    <meta charset='UTF-8'>
    <link href='https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300&display=swap' rel='stylesheet'>
    <link rel='shortcut icon' href='../Statics/ImagenesEN/icon.png'>
    <link rel='stylesheet' href='../Statics/css/estilos.css'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>F Recpuesta A7</title>
  </head>
  <body>";
  //Definimos los parametros de funcionalidad, tales como: la contraseña, el hash y el method
  define("PASSWORD", "Actividad 9");
  define("HASH", "SHA512");
  //define("METHOD", "des-ede3-cbc");
  //define("METHOD", "des-ofb");
  define("METHOD", "des-ede3-cfb8");

  function Cifrar($text){
    // Espero funcione xd (creamos la funcion para cifrar)
    $key = openssl_digest(PASSWORD, HASH);
    $iv_len = openssl_cipher_iv_length (METHOD);
    $iv = openssl_random_pseudo_bytes ($iv_len);

    $key = openssl_digest(PASSWORD,HASH);

    $rawCiff = openssl_encrypt(
    $text,
    METHOD,
    $key,
    OPENSSL_RAW_DATA,
    $iv
    );
    $textoCifrado = base64_encode($iv.$rawCiff);
    //$textoCifrado = urlencode($iv.$rawCiff);
    //$textoCifrado = utf8_encode($iv.$rawCiff);

    return $textoCifrado;
  }
  function Decifrar ($textoCifrado){
    // Espero funcione x2 (creamos la funcion para descifar)
    $key = openssl_digest(PASSWORD, HASH);
    $iv_len = openssl_cipher_iv_length (METHOD);

    $cifrado = base64_decode($textoCifrado);
    //$cifrado = urldecode($textoCifrado);
    //$cifrado = utf8_decode($textoCifrado);
    
    $iv = substr($cifrado, 0, $iv_len);
    $rawCiff = substr($cifrado, $iv_len);

    $originalText = openssl_decrypt(
    $rawCiff,
    METHOD,
    $key,
    OPENSSL_RAW_DATA,
    $iv
    );
    return $originalText;
  }
  //Damos algo para cifar y con ayuda de las funciones que creamos anteriormente, lo ciframos y lo desciframos
  $mensaje = "Creo que si salio :)";
  $ciff = Cifrar($mensaje);
  $original = Decifrar($ciff);

  echo "Mensaje original: <p>".$mensaje."</p><br>";
  echo "Mensaje cifrado: <p>".$ciff."</p><br>";
  echo "Mensaje decifrado: <p>".$original."</p><br>";
  
  echo "<p id='parrafo2'>";
  //Esto sirve para hashear uuna contraseña y verificar si es la misma
  echo '<br>'.'Hash/verify password:'.'<br>';
  //Se define/imprime el metodo
  echo METHOD.'<br>';
  $iv_len = openssl_cipher_iv_length (METHOD);
  //Se imprime la longitud del cifrado 
  echo $iv_len.'<br>';

  $passw = "Naruto";
  $opciones = [
    'cost' => 12,
  ];
  $pass = password_hash($passw, CRYPT_BLOWFISH, $opciones);
  //Se imprime la contraseña hasheada
  echo $pass.'<br>';
  $pv = password_verify($passw, $pass);
  //password_verify debuelve un boolenano, si es 1 (Si) nos indica que es correcto, y si es 0 (No), pues no es correcto
  if ($pv = 1) {
  echo 'si' . '<br>';
  }
  else {
  echo 'no'. '<br>';
  }
  /*Esto ayuda a encontrar todos los method's disponibles
  $methods=openssl_get_cipher_methods();
  foreach ($methods as $value) {
    # code...
    echo $value.'<br>';
  }*/
  echo "</p>";

  echo "
    </body>
  </html>";


?>
