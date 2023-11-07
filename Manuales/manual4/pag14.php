<!-- Sesiones2.php -->
<?php
    session_start();
    $costo = 0;
    if($_POST){
        $_SESSION['costototal'] += $_POST['producto'];
    }
    if(!isset($_SESSION['costototal'])){
        $_SESSION['costototal'] = $costo;
    }else{
        $costo = $_SESSION['costototal'];
    }
?>
<html>
    <head>
        <title>Sesiones</title>
    </head>
    <body bgcolor>
        <h1 align="center">SESIONES</h1><hr>
        <center>
            <form action="pag14.php" method="post">
                SELECCIONE EL ARTICULO A COMPRAR
                </center><br><center>
                    <select name="producto">
                        <option value="30">pantalones
                        <option value="25">camisas
                        <option value="20">zapatos
                        <option value="10">gorras
                    </select><br><br>
                    <input type="submit" value="comprar">
                </center>
            </form>
            <h2 align="center">COSTO TOTAL DE SU COMPR: <?php echo $costo; ?> </h2>
</body>
</html>