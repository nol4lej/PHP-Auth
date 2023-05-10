function doFetch(event){
    let target = event.target.name;
    event.preventDefault() // Prevenir que se recargue la página al hacer click
    fetch(`/dashboard.php?page=${target}`) // Posteriormente el valor de la variable page será utilizado en dashboard.php
        .then(respuesta => respuesta.text()) // Convertir la respuesta en texto.
        .then(html => {
            document.getElementById("content").innerHTML = html; // Insertar el contenido en el contenedor
            history.pushState({}, "", `dashboard.php?page=${target}`); //el método pushState() actualiza la URL del navegador sin recargar la página.
          })
        .catch(error => console.error(error)); // Manejar errores
}