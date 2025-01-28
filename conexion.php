<?php
    function abrir()
    {
    $host = "db";
    $user = "root";
    $pass = "naranco24";
    $db = "pizzeria";
    $conexion = new mysqli($host, $user, $pass,$db) or die("Error: %s\n". $conexion -> error);
    return $conexion;
    }
    function cerrar($conexion)
    {
    $conexion -> close();
    }
    ?>