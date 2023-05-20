fetch("../dashboard_blog/src/php/tabla_posts.php")
    .then(datos => datos.json())
    .then(datos_recibidos => mostrarEnTabla(datos_recibidos))
    .catch(error => console.log(error))


function mostrarEnTabla(datos){

    const posts = document.getElementById("datatable_posts");

    datos.forEach(elemento => {
        const tabla = document.createElement("tr");
        const contenedor_checkbox = document.createElement("td");
        const checkbox = document.createElement("input");
        checkbox.setAttribute("type", "checkbox");
        const status = document.createElement("td");
        status.setAttribute("id", "status");
        const id = document.createElement("td");
        id.setAttribute("id", "post_id");
        id.textContent = elemento.id;
        const titulo = document.createElement("td");
        titulo.setAttribute("id", "titulo");
        titulo.textContent = elemento.titulo;
        const fecha_publicacion = document.createElement("td");
        fecha_publicacion.setAttribute("id", "fecha_publicacion");
        fecha_publicacion.textContent = elemento.fecha_publicacion;
        const categoria = document.createElement("td");
        categoria.setAttribute("id", "categoria");
        categoria.textContent = elemento.categoria;
        const vistas = document.createElement("td");
        vistas.setAttribute("id", "vistas");
    
        // Luego puedes agregar los elementos a la tabla o hacer cualquier otra manipulación necesaria
        tabla.appendChild(contenedor_checkbox).appendChild(checkbox);
        tabla.appendChild(status);
        tabla.appendChild(id);
        tabla.appendChild(titulo);
        tabla.appendChild(fecha_publicacion);
        tabla.appendChild(categoria);
        tabla.appendChild(vistas);
        

        posts.append(tabla)

    });

}
