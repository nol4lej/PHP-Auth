<?php

function getConnection(){
    $host = 'localhost';
    $dbname = 'basededatos';
    $username = 'root';
    $password = '';

    try {
        // PDO (PHP Data Objects) es una interfaz en PHP que proporciona una manera coherente y segura de acceder a bases de datos relacionales.
        $connectionPDO = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);

        // PDO::ATTR_ERRMODE: Establece el modo de manejo de errores. 
        // PDO::ERRMODE_EXCEPTION configura PDO para que lance excepciones en caso de error, lanzará una excepción "PDOException".
        $connectionPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        // ---- CONEXION TRADICIONAL ----:
        // $connection = new mysqli($host, $username, $password, $dbname);
        // if ($connection->connect_error) {
        //     throw new Exception("Error en la conexión: " . $connection->connect_error);
        // }

        return $connectionPDO;

    } catch (PDOException $error) {
        echo $error->getMessage();
    }
}

?>
