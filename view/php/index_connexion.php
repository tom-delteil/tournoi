<!doctype html>

<html>
    <head>
        <title>connexion</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">    
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
        <script type="text/javascript" src="/CRM_MMA/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div class="container mt-5 start-0">
            <h1>Connexion</h1>
                <form action="/CRM_MMA/controller/connexion.php" method="post"class="row g-3 needs-validation" >
                <div class="col-md-6">
                    <label for="email" class="form-label">email</label>
                    <input id="email" type="email" name="email" class="form-control" required="true">
                </div>
                <div class="col-md-6">
                    <label for="password" class="form-label">Mot de passe</label>
                    <input id="password" type="password" name="password" class="form-control" required="true">
                </div>
                <div class="col-12">
                    <input type="submit" value="Connexion" class="btn btn-primary">
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
                <p><a href="/CRM_MMA/view/php/inscription.php">Inscription</a></p>
            </form>
        </div>
    </body>
</html>