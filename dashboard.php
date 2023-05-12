<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.0/classic/ckeditor.js"></script>
    <script src="https://cdn.ckbox.io/ckbox/1.5.0/ckbox.js"></script>

    <link rel="stylesheet" href="/src/css/dashboard.css">
    <link rel="stylesheet" href="/src/css/sidebar.css">
    <link rel="stylesheet" href="/src/css/contenedor_editor.css">
    <title>Dashboard</title>
</head>
<body>
    <nav class="sidebar">
        <div class="header">
            <button class="menu_button" onclick="menuResponsive()">
                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title></title> <g id="Complete"> <g id="align-left"> <g> <polygon fill="#ffffff" points="12.9 18 4.1 18 4.1 18 12.9 18 12.9 18" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></polygon> <polygon fill="#ffffff" points="20 14 4 14 4 14 20 14 20 14" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></polygon> <polygon fill="#ffffff" points="12.9 10 4.1 10 4.1 10 12.9 10 12.9 10" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></polygon> <polygon fill="#ffffff" points="20 6 4 6 4 6 20 6 20 6" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></polygon> </g> </g> </g> </g></svg>
            </button>
            <span>Dashboard</span>
        </div>
        <div class="menu" id="menu" >
            <nav class="nav_menu">
                <div>
                    <i class="material-icons">home</i>
                    <a href="#" name="content_dashboard" onclick="doFetch(event)">Dashboard</a>
                </div>
                <div>
                    <i class="material-icons">menu_book</i>
                    <a href="#" name="administrator" onclick="doFetch(event)">Administrar publicaciones</a>
                </div>
            </nav>
        </div>
    </nav>
    <main class="container">
        <div id="content">
            <?php
                // Se utiliza la función isset() para comprobar si el parámetro GET "page" está definido en la URL. La función isset() devuelve true si la variable está definida y false si no lo está.
                // Si el parámetro GET page está definido en la URL, se asigna su valor a la variable $page utilizando el operador ternario ? :. Si no está definido, se asigna el valor predeterminado 'main-content'.
                $page = isset($_GET['page']) ? $_GET['page'] : 'content_dashboard';
                // El nombre del archivo se construye dinámicamente utilizando la variable $page. Por ejemplo, si el valor de $page es 'about', se incluirá el archivo about.php.
                include "$page.php";
            ?>
        </div>
        <div class="contenedor_editor" id="contenedor_editor">
            <div id="editor"></div>
        </div>
    </main>

</body>

<script src="/src/js/navbar.js"></script>
<script src="/src/js/controlador_links.js"></script>
<script src="/src/js/wysiwyg.js"></script>
<script src="/src/js/modal_editor.js"></script>

</html>