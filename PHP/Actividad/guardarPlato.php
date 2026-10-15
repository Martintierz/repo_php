<?php
    include './objeto/plato.php';
    include './objeto/ingrediente.php';
    include './componentes/nav.php';
    include './conexion/db.php';

    $nombre = $_GET['nombre'];
    $precio = $_GET['precio'];
    $ingredientes = $_GET['ingredientes'];
    $tipo = $_GET['tipo'];

    $plato = new Plato($nombre, $precio, $tipo);
    //$ingrediente = new Ingrediente($nombreIngrediente);

    print_r($_GET);
    die();
    $sql = "INSERT INTO platos(nombre, precio, tipo)VALUES(:nombre, :precio, :tipo)";
    $stmt = $conector->prepare($sql);
    
    $stmt->bindParam(":nombre", $plato->nombre, PDO::PARAM_STR);
    $stmt->bindParam(":precio", $plato->precio, PDO::PARAM_STR);
    $stmt->bindParam(":tipo", $plato->tipo, PDO::PARAM_STR); 
    
    $stmt->execute();

    $sql = "INSERT INTO ingredientes(nombre)VALUES(:nombreIngrediente)";
    $stmt = $conector->prepare($sql);
    print_r($ingrediente);
    $stmt->bindParam(":nombreIngrediente", $ingrediente->nombreIngrediente, PDO::PARAM_STR);

    $stmt->execute();

    header("Location: indice.php");
?>