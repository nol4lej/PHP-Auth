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

const form = document.getElementById("crear_post_form");
const editor = document.getElementById("document-editor__editable");

form.addEventListener('submit', function() {
  const editorData = editor.innerHTML;
  console.log(editorData)
  const textarea = document.querySelector('textarea[name="contenido"]');
  textarea.value = editorData; // Asignar el contenido al valor del textarea
});
