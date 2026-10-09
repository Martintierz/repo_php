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
        $menu = [
            new Plato(
                'Migas',
                12,
                'Primero'
            ),
            new Plato(
                'Chuleton',
                25,
                'Segundo'
            ),
            new Plato(
                'Crema Catalana',
                7,
                'Postre'
            )
        ];

        foreach($menu as $plato){
            if($tipo == $plato -> tipo || $tipo == ''){
                echo '<li>';
                echo '<p>' . $plato->nombre . '</p>';
                echo '<p>' . $plato->precio . '</p>';
                echo '<p>' . $plato->tipo . '</p>';
                echo '<button type="submit">Borrar</button>';
                echo '<button type="submit">Editar</button>';
                echo '</li>';
            }
        }
    ?>

</body>
</html>