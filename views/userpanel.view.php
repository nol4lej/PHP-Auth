<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel</title>
</head>
<body>
    
    Panel
    <?php require "../controllers/session.controller.php";?>

    <p>Nombre de usuario: 
        <?php 
            $user = $session->getSession();
            echo $user["name"]; 
        ?>
    </p>

</body>
</html>