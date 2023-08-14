<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel</title>
</head>
<body>
    
    Panel
    <?php 
        require_once "../controllers/session.controller.php";
        $handleSessions->verifyNoSession();
    ?>

    <p>Nombre de usuario: 
        <?php 
            $user = $handleSessions->getSession();
            echo $user["name"]; 
        ?>
    </p>

    <form action="" method="post">
        <button type="submit" name="logout-btn" value="Boton desconectar">Desconectar</button>
    </form>

    <?php
        if(isset($_POST["logout-btn"])){
            $handleSessions->logout();
        }
    ?>

</body>
</html>