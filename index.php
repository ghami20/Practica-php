<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="envio.php" method="post">
    <label for="">Nombre</label>
    <input name="nombre" type="text">
    <br>
    <label for="">Apellido</label>
    <input name="apellido" type="text">
    <br>
    <label for="">Edad</label>
    <input name="edad" type="text">
    <br>
    <select name="carrera" id="">
        <option value="Comunicación multimedial">Comunicación multimedial</option>
        <option value="Periodismo">Periodismo</option>
        <option value="Cine">Cine</option>
    </select>
    <br>
    <button type="submit">Envio</button>
    </form>
</body>
</html>