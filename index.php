<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>Document</title>
</head>
<body>
    
    <?php 
        require_once "./controllers/session.controller.php";
        $handleSessions->verifyIfSession();
    ?>

    <main class="main">
        <div class="main__container">
            <?php include "./controllers/login.controller.php" ?>
            <form action="" method="POST" class="main__form">
                <div class="form__content">
                    <label for="user">Nombre de usuario</label>
                    <input type="text" name="user" id="user">
                </div>
                <div class="form__content">
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" id="password">
                </div>
                <button type="submit" name="btn-login" value="btn-login">Iniciar sesión</button> 
                <!-- el value de button permite que funcione correctamente el login.controller -->
            </form>
        </div>
    </main>

</body>
</html>