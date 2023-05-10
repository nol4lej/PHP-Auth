<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/src/css/dashboard.css">
    <link rel="stylesheet" href="/src/css/sidebar.css">
    <!-- asd -->
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
                <a href="#" name="main_dashboard" onclick="doFetch(event)">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                    <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
                </svg>
                Dashboard
                </a>
                <a href="#" name="administrator" onclick="doFetch(event)">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                    <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                </svg>
                Administrar publicaciones
                </a>
            </nav>
        </div>
    </nav>
    <main class="container">
        <div id="content">
            <?php
                // Se utiliza la función isset() para comprobar si el parámetro GET page está definido en la URL. La función isset() devuelve true si la variable está definida y false si no lo está.
                // Si el parámetro GET page está definido en la URL, se asigna su valor a la variable $page utilizando el operador ternario ? :. Si no está definido, se asigna el valor predeterminado 'main-content'.
                $page = isset($_GET['page']) ? $_GET['page'] : 'content_dashboard';
                // El nombre del archivo se construye dinámicamente utilizando la variable $page. Por ejemplo, si el valor de $page es 'about', se incluirá el archivo about.php.
                include "$page.php";
            ?>
        </div>
    </main>

</body>

<script src="/src/js/navbar.js"></script>
<script src="/src/js/controlador_links.js"></script>

</html>