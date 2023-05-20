function doFetch(event){
    let contenedor_contenido = document.getElementById("content");
    let target = event.target.name; //Obtiene el valor del atributo name del boton que se a clickeado
    if(target){ // Creado para cerrar el modal editor si es que se cambia de pagina
      const contenedor = document.getElementById("contenedor_editor");
      contenedor_contenido.style.display = "block";
      contenedor.style.display = "none";
    }
    event.preventDefault() // Prevenir que se recargue la página al hacer click
    fetch(`${target}.php`) // Posteriormente el valor de la variable page será utilizado en dashboard.php
        .then(respuesta => respuesta.text()) // Convertir la respuesta en texto.
        .then(html => {
            // document.getElementById("content").innerHTML = html;
            contenedor_contenido.innerHTML = html
            history.pushState({}, "", `dashboard.php?page=${target}`); //el método pushState() actualiza la URL del navegador sin recargar la página.
          })
        .catch(error => console.error(error)); // Manejar errores
}

// POSIBLE SOLUCION - ENCONTRAR ID DE HTML FORMATO TEXTO RECIBIDO POR FETCH
// * Creamos una nueva instancia del objeto DOMParser y la asignamos a la constante parser.
// * Utilizamos la instancia de DOMParser para analizar el contenido de html (que es una cadena de texto que contiene un fragmento HTML) y convertirlo en un objeto Document que representa el contenido HTML.
// const parser = new DOMParser();
// * La función parseFromString() de la clase DOMParser analiza una cadena de texto y la convierte en un objeto Document.
// * Estamos utilizando la variable html, que contiene el contenido del archivo HTML obtenido a través de la respuesta de la promesa de la función fetch().
// * El segundo argumento de parseFromString() indica que estamos analizando una cadena de texto con formato HTML. El objeto doc creado por la función contendrá el DOM (Document Object Model) que representa el contenido del archivo HTML analizado.
// const doc = parser.parseFromString(html, 'text/html');
// * En el DOM object, buscamos el id que necesitamos
// const contenido = doc.getElementById('content');
// * usamos la propiedad innerHTML para obtener su contenido como una cadena de texto en formato HTML.
// const contenido_convertido = contenido.innerHTML;
// document.getElementById("content").innerHTML = contenido_convertido;