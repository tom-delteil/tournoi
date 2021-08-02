<!doctype html>

<html>
    <head>
        <title>inscription</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container mt-5">
            <h1>Inscription</h1>
        <?php
        if (isset($_GET['reg_err'])) {
            $err = htmlspecialchars($_GET['reg_err']);

            switch ($err) {
                case 'success':
                    ?>
                    <div class="container mt-5">Inscription réussie !</div>
                    <?php
                    break;

                case 'password':
                    ?>
                    <div class="container mt-5">Mot de passe incorrect</div>
                    <?php
                    break;

                case 'email':
                    ?>
                    <div class="container mt-5">email non valide</div>
                    <?php
                    break;

                case 'email_length':
                    ?>
                    <div class="container mt-5">email trop long</div>
                    <?php
                    break;

                case 'already':
                    ?>
                    <div class="container mt-5">Compte déjà existant</div>
                <?php
            }
        }
        ?>
        <?php
        switch ($_GET['form_empty']){
            case 1:
                echo "<div class='container mt-5'>login et mot de passe vide</div>";
                break;
            case 2:
                echo "<div class='container mt-5'>login vide</div>";
                break;
            case 3:
                echo "<div class='container mt-5'>mot de passe vide</div>";
                break;
//            case 4 && 6:
//                echo "email et/ou mot de passe invalide";
//                break;
//            case 5:
//                echo "email incorrecte";
//                break;
        }
        ?>
            <form action="inscription_traitement.php" method="post" class="row g-3 needs-validation"
                  oninput='up2.setCustomValidity(confirm_mdp.value != password.value ? "Passwords do not match." : "")'>
                <div class="col-md-8">
                    <label for="email" class="form-label" >email</label>
                    <input id="email" type="email" name="email" class="form-control" required="true">
                </div>
                <div class="col-md-6">
                    <label for="password1" class="form-label" >Mot de passe</label>
                    <input id="password1" type="password" name="password" class="form-control" required="true">
                </div>
                <div class="col-md-6">
                    <label for="password2" class="form-label">Confirmez le mot de passe</label>
                    <input id="password2" type="password" name="confirm_mdp" class="form-control" required="true">
                </div>
                <div class="col-12">
                    <input type="submit" value="s'inscrire" class="btn btn-primary">
                </div>
                <p><a href="index.php">Connexion</a></p>
            </form>
        </div>
    </body>
</html>