<!-- upload.php -->
<html>
    <head>
        <title>Upload de archivos</title>
    </head>
    <body>
        <h1 align="center">UPLOAD DE ARCHIVOS</h1><hr>
        <?php
            $archivo_temp = $_FILES['archivo']['tmp_name'];
            $tam = $_FILES['archivo']['size'];
            echo "TAMAÑO DEL ARCHIVO: $tam BYTES<br>";
            $ruta = "/correo/usuario";
            $nombre_archivo = $_FILES['archivo']['name'];
            $archivo_destino = "$ruta/$nombre_archivo";
            echo "NOMBRE DEL ARCHIVO ORIGINAL: $nombre_archivo <br>";
            echo "NOMBRE DEL ARCHIVO DESTINO: $archivo_destino <br>";
            echo "NOMBRE DEL ARCHIVO TEMPORAL: $archivo_temp <br>";
            copy($archivo_temp, $archivo_destino) or die("No se puede copiar $nombre_archivo");
            echo "Archivo recibido";
        ?>
    </body>
</html>