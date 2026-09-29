<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jugadores</title>
</head>
<body>
    <?php
        include '/DB/conexion.php';
        include 'navegador/nav.php';
        include '/objeto/jugador.php';
    ?>

    <h1>Lista de Jugadores</h1>
    <form action="" method="GET">
        <label for="dorsal">Dorsal: </label>
        <input type="text" id="dorsal" name="dorsal"><br><br>

        <input type="submit" value="Buscar">
    </form>
</body>
</html>