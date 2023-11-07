<!-- Sesiones.php -->
<?php
    session_start();
    if(isset($_SESSION['contador'])){
        $_SESSION['contador']++;
    }else{
        $_SESSION['contador']=0;
    }
?>
<html>
    <head>
        <title>Sesiones</title>
    </head>
    <body bgcolor="#3399cc">
        <h1 aling="center">Sesiones</h1><hr>
        <?php
            echo "ID DE LA SESION: ". session_id(). "<br>";
            echo "NOMBRE DE LA SESION: " . session_name() . "<br>";
            echo "NUMERO DE VECES QUE HA INGRESADO A LA PAGINA EN ESTA SESION ". $_SESSION['contador'];
        ?>
    </body>
</html>
