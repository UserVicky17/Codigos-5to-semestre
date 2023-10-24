<?php
// estamos haciendo pasar información desde un form (viene del html "pag8.html")
if($_GET){
    $usuario = $_GET['usuario'];
    $preferen = $_GET['preferencia'];
    // declaramos una cookie con el nombre usuario pasando la info de usuario y asignando un tiempo de 3600 segundo
    setcookie("usuario",$usuario,time()+3600);
    setcookie("preferencia",$preferen,time()+3600);
}
?>
<?php
if(isset($_COOKIE['usuario'])){
    $usuario =$_COOKIE['usuario'];
}
if(isset($_COOKIE['preferencia'])){
    $preferen =$_COOKIE['preferencia'];
}
switch($preferen){
    case 1:
        $promocion = "deportes.jpg";
        break;
    case 2:
        $promocion = "computacion.jpg";
        break;
    case 3:
        $promocion = "licores.jpg";
        break;
    default:
        $promocion = "d.jpg";
        break;
}
?>
<html>
    <head>
        <title>
            Procesar cookie
        </title>
    </head>
    <body>
        <h1 align="center">PROCESAR COOKIE </h1><br>
        <?php
            if($usuario!=""){
                echo "<center>BIENVENIDO <b>$usuario</b></center><br>";
            }else{
                echo "<center>BIENVENIDO PRO PRIMERA VEZ A NUESTRA WEB</center><br>";
            }
            echo "<center>PROMOCIÓN DE LA SEMANA</center><br>";
            echo "<img src='",$promocion,"'</center>";
        ?>
    </body>
</html>