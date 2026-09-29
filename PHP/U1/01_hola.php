<?php
    echo "Hola Mundo"; 
?>

<?php
    $nombre = "Martín";
    $edad = "20";

    echo $nombre;
    echo $edad;
?>

<?php
    $num1 = 1;
    $num2 = 2;

    $sum = ($num1 + $num2);

    echo $sum;
?>
//titulo
<?php
    echo '<h1>Titulo</h1>';
?>
/*
Hola 
adios
*/

<br>
<br>

<?php
    $edad1 = 17;

    if($edad1 > 18){
        echo "Puedes pasar";
    }else{
        echo "No puedes pasar <br><br>";
    }
?>

<?php
    for($x = 1; $x <= 5; $x++){
        echo "El numero es: $x <br>";
    }
?>

<br>

<?php
    $colores = array("Azul", "Blanco", "Rosa");
    echo "$colores[0]<br>";
    echo "$colores[1]<br>";
    echo "$colores[2]<br>";
?>

<br>

<?php
    $frutas = array("Platano", "Sandia", "Melon");

    foreach($frutas as $value){
        echo "$value <br>";
    }
?>

<br>

<?php
    $notas = array(7, 10, 2);

    $notas["Juan"] = 7;
    $notas["Lorien"] = 2;
    $notas["Koke"] = 10;

   print_r ($notas);
?>

<br>

<?php
    function saludar(){
        echo "Hola";
    }

    saludar();
?>

