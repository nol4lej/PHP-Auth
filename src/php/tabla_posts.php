<?php

    require_once("./conexion.php"); 

    // Consulta SQL para seleccionar todas las publicaciones
    $query = "SELECT id, titulo, fecha_publicacion, categoria FROM posts";

    // Ejecutar la consulta y obtener los resultados
    $resultado = mysqli_query($conn, $query);

    // Creamos un arreglo vacio para utilizarlo como arreglo asociativo y poder almacenar las publicaciones.
    // De esta manera el formato (clave:valor) es compatible con JSON.
    $publicaciones = array();

    // La función mysqli_fetch_assoc() es una función de PHP que se utiliza para recuperar una fila de resultados como un array asociativo. Esta función se utiliza en combinación con la función mysqli_query(), que se utiliza para ejecutar una consulta en una base de datos MySQL.
    // Cuando se ejecuta una consulta y se obtienen resultados mediante la función mysqli_query(), estos resultados se almacenan en una variable llamada resultado. La función mysqli_fetch_assoc() se utiliza para obtener una fila de resultados de esta variable y devolverla como un array asociativo.
    // En otras palabras, la función mysqli_fetch_assoc() convierte una fila de resultados de una tabla de MySQL en un array asociativo de PHP. Cada columna de la tabla se convierte en una clave del array y el valor de cada clave es el valor correspondiente de la columna.
    while ($publicacion = mysqli_fetch_assoc($resultado)) {

    // Agregamos cada publicación como un elemento del arreglo asociativo.
    $publicaciones[] = array(
        'id' => $publicacion['id'],
        'titulo' => $publicacion['titulo'],
        'fecha_publicacion' => $publicacion['fecha_publicacion'],
        'categoria' => $publicacion['categoria']
    );
}

// Convertimos el arreglo en una cadena de texto JSON y la enviamos al cliente
echo json_encode($publicaciones);

// Liberar los resultados de la memoria
mysqli_free_result($resultado);

// Cerrar la conexión a la base de datos
mysqli_close($conn);

?>