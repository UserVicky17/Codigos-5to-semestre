<?php
// asignación de variables que se utilizaran más adelante
// esta seccion de codigo php no genera salida
// pagina html (no se utiliza "echo")
$nombre = 'Oliver'; //Nombre del usuario
$titulo_pagina = 'La editorial ENI presenta...'; //titulo
$hoy = date("d/m/Y"); //Fecha del día
$hora = date("H:i:s");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" ; <head>
<meta charset="utf-8">
<title>
    <?php echo $titulo_pagina; ?>
</title>
</head>

<body>
    <p>
        <?php
        echo "¡Hola <b>$nombre</b>! <br>";
        echo "Estamos a $hoy; son las $hora.";
        ?>
    </p>
</body>
</html>