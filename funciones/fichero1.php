<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica PHP</title>
</head>
<body>
    <?php
        $miArchivo = fopen("archivo1.txt", "r+");
        if($miArchivo == false){
            echo("Error al abrir el archivo");
        }

        $miArchivo2 = fopen("archivo3.txt", "w");
        $miArchivo3 = fopen("archivo2.txt", "w");
    ?>
</body>
</html>