<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "blog";

    $conn = mysqli_connect($host, $user, $password, $database);

    if(!$conn){
        die("Error al conectar: " . mysqli_connect_error());
    }

?>