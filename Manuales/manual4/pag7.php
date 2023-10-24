<?php
    // estructura para crear cookies
    //int setcookie(string nombre [,string valor] [,int caducidad]
    // [,string ruta] [,string dominio] [,int seguro])

    $iaccesos = 1;
    if(isset($_COOKIE['accesos'])){
        $iaccesos = $_COOKIE['accesos'];
        $iaccesos++;
    }
    setcookie("accesos", $iaccesos, time()+100);
?>
<html>
    <head>
        <title>
            Reconoce3r al usuario con cookies 
        </title>
    </head>
    <body bgcolor="#3399cc">
        <h1 align="center">
            Reconocer al usuario con cookies
        </h1>
        <?php
            if($iaccesos == 1){
                echo "Gracias por visitar por primera vez nuetra página";
            }else{
                echo "Cliente asiduo nos ha visitado: $iaccesos";
            }
        ?>
        </body>
</html>