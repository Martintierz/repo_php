<?php
    include './DB/conexion.php';
    include './objeto/jugador.php';

    $dorsal = $_POST['dorsal']??0;
    $nombre = $_POST['nombre']??"";

    $jugador = new Jugador($dorsal, $nombre);

    $sql = "INSERT INTO jugadores(dorsal, nombre)VALUES(:dorsal, :nombre)";
    $stmt = $conector-> prepare($sql);
    $stmt->bindParam(':dorsal', $jugador->dorsal, PDO::PARAM_INT);
    $stmt->bindParam(':nombre', $jugador->nombre, PDO::PARAM_STR);

    $stmt->execute();
    header("Location: indice.php");
?>