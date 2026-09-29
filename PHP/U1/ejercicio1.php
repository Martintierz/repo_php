<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $errores = array();
       if($_SERVER["SERVER_REQUEST"] == "POST"){
            if(empty($_POST['nombre'])&& !empty($_POST['precio'])&& !empty($_POST['cantidad'])){
                array_push($errores,"Campo Nombre esta vacio");
            }
            if($_POST['precio'] <= 0){
                array_push("No puede ser ni negativo ni cero");
            }
            if($_Post['cantidad'] <= 0){
                array_push("No puede ser ni negativo ni cero");
            }
       }
    ?>
    <form method="post" action="">
        <style>.error{color: red;}</style>

        <label for="nombre">Nombre: </label><br>
        <input type="text" id="nombre" name="nombre">
        <span class="error">*</span><br>
        <label for="precio">Precio Unitario: </label><br>
        <input type="number" id="precio" name="precio" step="any" required>
        <span class="error">*</span><br>
        <label for="cantidad">Cantidad: </label><br>
        <input type="number" id="cantidad" name="cantida" required>
        <span class="error">*</span><br>
        <label for="socio">Socio</label>
        <input type="checkbox" id="socio" name="socio">
        <span class="error">*</span><br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
        foreach()
    ?>
</body>
</html>