<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<body>
    <?php
        include "componentes/nav.php";
        include "/conexion/db.php";
        include "/objeto/plato.php";
    ?>
    <h1>Introduce el plato que desea</h1>
    <form action="" method="GET">
        <label for="tipo">Tipo:</label><br>
        <input type="text" id="tipo" name="tipo"><br><br>

        <input type="submit" value="Buscar">
    </form>
    <?php
        
    ?>

</body>
</html>