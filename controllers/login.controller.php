<?php

// btn-login permite que no se cargue en primera instancia la condición de los input.
if(!empty($_POST["btn-login"])){
    if(!empty($_POST["user"]) && !empty($_POST["password"])){

        // __DIR__ es una constante mágica predefinida en PHP que representa la ruta absoluta del directorio del archivo actual en el sistema de archivos.
        require_once __DIR__ . '/../model/connection.php'; // importo la funcion getConnection();
        
        $user = $_POST["user"];
        $password = $_POST["password"];
    
        try {

            // TÉCNICA DE CONSULTAS PREPARADAS:
            // Se utilizan para prevenir ataques de inyección SQL al manipular datos ingresados por los usuarios. 
            // Las consultas preparadas separan los datos de la consulta SQL, evitando la concatenación directa de valores 
            // en las consultas y permitiendo que el motor de base de datos maneje de manera segura los datos ingresados.

            // 1.- Separación de datos y consulta: 
            // En lugar de incluir los valores directamente en la consulta SQL, 
            // se usan marcadores de posición en la consulta. Los marcadores de posición son símbolos especiales (como ? o :nombre) 
            // que representan los valores reales que se usarán en la consulta.
            $query = "SELECT * FROM usuarios WHERE name=:user AND password=:password"; // Usar marcadores de posición

            // 2.- Preparación de la consulta: 
            // La consulta se envía al motor de la base de datos sin los valores reales, 
            // pero con los marcadores de posición. La base de datos "prepara" la consulta y crea un plan de ejecución sin los datos.
            $statement = getConnection()->prepare($query);

            // 3.- Enlace de parámetros: 
            // Los valores reales se enlazan a los marcadores de posición en la consulta preparada. 
            // Los datos ingresados por el usuario se enlazan de manera segura a los marcadores, evitando la inyección SQL.
            $statement->bindParam(':user', $user);
            $statement->bindParam(':password', $password);

            // 4.- Ejecución de la consulta:
            // La consulta preparada con los valores enlazados se ejecuta en la base de datos. 
            // Dado que los valores están enlazados, la base de datos sabe que los datos son datos y no parte de la consulta SQL, 
            // lo que previene la inyección SQL.
            $statement->execute();

            // Mayor seguridad: Debido a que los datos ingresados por el usuario nunca se concatenan directamente en la consulta SQL, 
            // incluso si un usuario malintencionado intenta ingresar datos maliciosos, los marcadores de posición y la enlazación de parámetros 
            // impiden que los datos se interpreten como parte de la consulta.

            // Obtener los resultados de la consulta como un array asociativo
            $result = $statement->fetch(PDO::FETCH_ASSOC);

            if($result){

                require_once "session.controller.php";
                $handleSessions->setNewSession($result);
                $handleSessions->verifyIfSession();

            } else {
                throw new Exception("Credenciales incorrectas.");
            }


            // ------------- consulta tradicion con conexion mysql -------------
            // $query = "SELECT * FROM usuarios WHERE name=$user AND password=$password";
            // $result = $connection->query($query);
            // var_dump($result);
    
    
        } catch (Exception $error) {
            echo $error->getMessage();
        }

    } else {
        echo "campos vacios";
    }
}


?>