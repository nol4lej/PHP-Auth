<?php

    require_once("./conexion.php");

    $titulo = $_POST["titulo"];
    $contenido = $_POST["contenido"];
    $categoria = $_POST["categoria"];
    $fecha_actual = $_POST["fecha_actual"];

    // La variable ruta_archivo se define al principio del código con un valor vacío '',
    // luego dentro del bloque if se reasigna con la ruta del archivo en caso de que se haya enviado uno.
    // Si esto no es así y no se ha enviado un archivo, la variable nunca se define provocando un error.
    $ruta_archivo = "";

    // Esta línea verifica si se ha enviado un archivo con el nombre "imagen" a través del método POST. Si es así, continúa con el proceso de carga.
    if(isset($_FILES['imagen'])) {
        // Aquí se obtiene la ruta temporal del archivo cargado (que PHP asigna automáticamente) y se concatena con la ruta deseada para el archivo en el servidor.
        $archivo = $_FILES['imagen']['tmp_name'];
        // La variable $nombre_archivo se usa para verificar si se ha cargado un archivo antes de construir la ruta del archivo.
        // Si $nombre_archivo tiene un valor, se construye la ruta del archivo normalmente.
        // Si $nombre_archivo no tiene un valor (porque no se ha cargado ningún archivo),
        // entonces $ruta_archivo se establece en una cadena vacía, lo que significa que no se agregará nada a la columna "imagen" en la tabla "publicacion".
        $nombre_archivo = $_FILES['imagen']['name'];
        if(!empty($nombre_archivo)){
            $ruta_archivo = 'C:\xampp\htdocs\imagenes/' . $_FILES['imagen']['name'];
            // se utiliza la función "move_uploaded_file" para mover el archivo desde la ruta temporal a la ruta deseada en el servidor.
            move_uploaded_file($archivo, $ruta_archivo);
        }
        // se utiliza la función "mysqli_real_escape_string" para escapar cualquier carácter especial en la ruta del archivo,
        // lo que ayuda a prevenir ataques de inyección de SQL.
        // Esto utiliza el operador ternario ? : para verificar si $ruta_archivo tiene un valor. Si es así, se utiliza $ruta_archivo como argumento para mysqli_real_escape_string(). Si $ruta_archivo no tiene un valor (es decir, es null, false, o una cadena vacía), entonces se utiliza $nombre_archivo como argumento en su lugar.
        $ruta_sql = mysqli_real_escape_string($conn, ($ruta_archivo ? $ruta_archivo : $nombre_archivo));
      }

    $sql = "INSERT INTO posts (titulo, contenido, fecha_publicacion, categoria, imagen)
        VALUES ('$titulo', '$contenido', '$fecha_actual', '$categoria', '$ruta_sql')";

    if(mysqli_query($conn, $sql)){
        echo "Artículo publicado correctamente";
    } else {
        echo "Error al publicar el artículo: " . mysqli_error($conn);
    }

    //cerrar la conexion a la base de datos
    mysqli_close($conn);

?>