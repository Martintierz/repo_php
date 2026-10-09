<?php
    include '/objeto/plato.php';
    include '/componentes/nav.php';

    $nombre = $_GET['nombre'];
    $precio = $_GET['precio'];
    $tipo = $_GET['tipo'];

    header("Location: indice.php");
?>