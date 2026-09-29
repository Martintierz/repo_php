<?php
    $servidor = "bd.cmgc74egraoe.us-east-1.rds.amazonaws.com";
    $port = "3306";
    $usuario = "admin";
    $password = "Tierz2021";
    $base_datos = "futbol";

    $dsn = "mysql:host=$servidor;port=$port;dbname=$base_datos;charset=utf8mb4";
    $opciones_ssl = [
        PDO::MYSQL_ATTR_SSL_CA => '/home/estudiante/Descargas/global-bundle.pem',
        // Desactivamos temporalmente la verificación estricta del nombre del host para asegurar que conecte
        PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => false
    ];
    $conector = null;
    try{
    $conector = new PDO($dsn, $usuario, $password, $opciones_ssl); 
    }
    catch(Exception $e){
        print_r($e);
    }
?>