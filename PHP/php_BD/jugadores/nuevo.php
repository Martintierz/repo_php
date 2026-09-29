<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_BD</title>
</head>
<body>
    <?php
        include 'navegador/nav.php';
    ?>
    <p><h1><b>Introduce el jugador</b></h1></p>
    <form action="guardar.php" method="POST">
        <label for="dorsal">Dorsal: </label><br>
        <input type="text" id="dorsal" name="dorsal"><br>
        <label for="nombre">Nombre: </label><br>
        <input type="text" id="nombre" name="nombre"><br><br>

        <input type="submit" value="Guardar">
    </form>
</body>
</html>

