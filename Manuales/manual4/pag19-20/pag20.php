<!-- uploadvarios.php -->
<html>
    <head>
        <title>UPLOAD DE VARIOS ARCHIVOS</title>
    </head>
    <body>
        <h1 align="center">UPLOAD DE VARIOS ARCHIVOS</h1><hr>
        <?php
            echo "<h2 align='center'>NUMERO MAXIMO DE ARCHIVOS ADJUNTOS: ". count($_FILES). "</h2>";
            $inum = 0;
            for($i = 1; $i <= count($_FILES); $i++){
                $archivo = "archivo$i";
                $archivo_temp = $_FILES[$archivo]['tmp_name'];
                if(!is_uploaded_file($archivo_temp)){
                    echo "ERROR". $_FILES[$archivo]['error'];
                }
                if($archivo_temp == ""){
                    break;
                }
            }
        