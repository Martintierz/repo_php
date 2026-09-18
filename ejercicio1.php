<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">

        <style>.error{color: red;}</style>

        <label for="nombre">Nombre: </label><br>
        <input type="text" id="nombre" name="nombre">
        <span class="error">*</span><br>
        <label for="precio">Precio Unitario: </label><br>
        <input type="number" id="precio" name="precio" step="any" min="1" required>
        <span class="error">*</span><br>
        <label for="cantidad">Cantidad: </label><br>
        <input type="number" id="cantidad" name="cantida" min="1" required>
        <span class="error">*</span><br>
        <label for="socio">Socio</label>
        <input type="checkbox" id="socio" name="socio" required>
        <span class="error">*</span><br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
<?php

    $errores = array();

    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        if(empty($_POST['nombre'])){
            array_push($errores["Introduce Nombre"]);
        }
    }
?>