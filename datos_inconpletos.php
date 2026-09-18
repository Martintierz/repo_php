<?php
    if(empty($_POST['nombre'])){
        echo "Nombre no introducido"."<br>";
    }else{
        echo "Nombre: ".$_POST['nombre']."<br>";
    }
    if(empty($_POST['apellido'])){
        echo "Apellido no introducido"."<br>";
    }else{
        echo "Apellido: ".$_POST['apellido']."<br>";
    }
?>