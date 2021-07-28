<?php
   require_once 'checkSession.php';
?>
<!<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>title</title>
    </head>
    <body>
        <h1>Bonjour ! <?php echo $_SESSION['user']; ?></h1>
        <button><a href="deconnexion.php">Déconnexion</a></button>
    </body>
</html>
