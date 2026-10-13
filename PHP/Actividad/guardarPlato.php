<?php
    include '/objeto/plato.php';
    include '/objeto/ingrediente.php';
    include '/componentes/nav.php';

    $nombre = $_GET['nombre'];
    $precio = $_GET['precio'];
    $ingrediente = $_GET['nombreingrediente'];
    $tipo = $_GET['tipo'];

    $plato = new Plato ($nombre, $precio, $tipo);
    $ingrediente = new Ingrediente($nombreIngrediente);

    $sql = "";

    header("Location: indice.php");
?>