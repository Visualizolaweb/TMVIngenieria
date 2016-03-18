<?php
  function url_friendly($url){
    // Transformamos todo a minusculas
    $url = strtolower($url);
    // Reemplazamos caracteres especiales latinos
    $find = array('á','é','í','ó','ú','ñ','ü');
    $repl = array('a','e','i','o','u','n','u');

    $url = str_replace($find,$repl,$url);

    // Añadimos los guiones

    $find = array('/[^a-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/');
    $repl = array(",'-',");

    $url = preg_replace($find, $repl, $url);

    return $url;
  }
?>
