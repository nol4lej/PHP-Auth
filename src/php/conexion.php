<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "blog";

    $conexion = mysqli_connect($host, $user, $password, $database);

    if(!$conexion){
        die("Error al conectar: " . mysqli_connect_error());
    }

?>