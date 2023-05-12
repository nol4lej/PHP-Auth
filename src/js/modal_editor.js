const contenedor = document.getElementById("contenedor_editor")
const contenedor_contenido = document.getElementById("content")

function modalEditor(){
    if(contenedor.style.display === "flex"){
        contenedor.style.display = "none";
        contenedor_contenido.style.display = "flex";
    } else {
        contenedor.style.display = "flex";
        contenedor_contenido.style.display = "none";
    }
}

// function modalEditor(){
//     if(contenedor.style.display === "flex"){
//         contenedor.style.display = "none";
//         contenedor_contenido.style.display = "flex";
//     } else {
//         contenedor.style.display = "flex";
//         contenedor_contenido.style.display = "none";
//     }
// }