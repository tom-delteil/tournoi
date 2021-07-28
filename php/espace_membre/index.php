<!doctype html>

<html>
    <head>
        <title>connexion</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form action="connexion.php" method="post">
            <div>
                <label for="email">email</label>
                <input id="email" type="email" name="email"  required="true">
            </div>
            <div>
                <label for="password">Mot de passe</label>
                <input id="password" type="password" name="password" required="true">
            </div>
            <div>
                <input type="submit" value="Connexion">
            </div>
            <?php
                switch ($_GET['form_empty']){
                    case 1:
                        echo "login et mot de passe vide";
                        break;
                    case 2:
                        echo "login vide";
                        break;
                    case 3:
                        echo "mot de passe vide";
                        break;
                    case 4 && 6:
                        echo "email et/ou mot de passe invalide";
                        break;
                    case 5:
                        echo "email incorrecte";
                        break;
                }
            ?>
            <p><a href="inscription.php">Inscription</a></p>
        </form>
    </body>
</html>