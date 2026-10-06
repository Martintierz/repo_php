<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Plato</title>
</head>
<body>
    <?php
        include "componentes/nav.php";
    ?>
    <h1>Inroduce el Plato</h1>
    <form action="guardarPlato.php" metod="get">
        <label for="nombre">Nombre del plato: </lable><br>
        <input type="text" id="nombre" name="nombre" required><br>
        <label for="precio">Introduce el precio</label><br>
        <input type="text" id="precio" name="precio" min=1 required><br>
        <label for="tipo">Introduce el tipo</label><br>
        <input type="text" id="tipo" name="tipo" required><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>