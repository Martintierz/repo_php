<?php
    include './objeto/plato.php';
    include './componentes/nav.php';
    include './conexion/db.php';

    $nombre = $_GET['nombre'];
    $precio = $_GET['precio'];
    $tipo = $_GET['tipo'];

    $plato = new Plato($nombre, $precio, $tipo);
    
    $sql = "INSERT INTO platos(nombre, precio, tipo)VALUES(:nombre, :precio, :tipo)";
    $stmt = $conector->prepare($sql);
    
    $stmt->bindParam(":nombre", $plato->nombre, PDO::PARAM_STR);
    $stmt->bindParam(":precio", $plato->precio, PDO::PARAM_STR);
    $stmt->bindParam(":tipo", $plato->tipo, PDO::PARAM_STR); 
    
    $stmt->execute();

    header("Location: indice.php");
?>