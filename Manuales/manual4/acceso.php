<?php
    $PHP_AUTH_USER = $_POST['user'];
    $PHP_AUTH_PW = $_POST['contra'];

    if($PHP_AUTH_USER != "Marco" || $PHP_AUTH_PW != "Hola"){
        header('WWW-Authenticate: Basic realm = "Adonde crees que vas');
        header('HTTP/1.0401/Unauthorized');
        echo "Acceso Denegado";
        exit;
    }else{  
        echo "Acceso Concedido";
    }
?>