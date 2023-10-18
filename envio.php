<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Envio.php</h1>
</body>
</html>
<?php 
   $nombre = $_POST["nombre"];
   $apellido = $_POST["apellido"];
   $edad = $_POST["edad"];
   $carrera = $_POST["carrera"];
   echo"<div class=\"formulario\"> ";
   echo" nombre {$nombre} ";
   echo" apellido {$apellido} ";
   echo" edad {$edad} ";
   echo" carrera {$carrera} ";
   echo "</div>";
   echo "<a href=\"index.php\">Volver a inicio</a>"
   ?>