<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
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
   echo "<a href=\"index.php\">Volver a inicio</a>";

      $connection = new SQLite3('usuario.db');

      if (!$connection) {
          die("No se pudo conectar a la base de datos");
      }
      // Crear la tabla si no existe
      $connection->exec('
          CREATE TABLE IF NOT EXISTS usuario (
              id INTEGER PRIMARY KEY,
              nombre TEXT,
              apellido TEXT,
              edad TEXT,
              carrera TEXT
          )
      ');

      $instruction_sql = "INSERT INTO usuario (nombre, apellido, edad,carrera) VALUES ('$nombre', '$apellido', '$edad','$carrera')";

      $result = $connection->exec($instruction_sql);

      if (!$result) {
          echo "Error: " . $connection->lastErrorMsg();
      } else {
      }
   ?>