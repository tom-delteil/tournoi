<?php
if (isset($_GET['reg_err'])) {
    $err = htmlspecialchars($_GET['reg_err']);

    switch ($err) {
        case 'success':
            ?>
            <div>Inscription réussie</div>
            <?php
            break;

        case 'password':
            ?>
            <div>Mot de passe incorrect</div>
            <?php
            break;

        case 'email':
            ?>
            <div>email non valide</div>
            <?php
            break;

        case 'email_length':
            ?>
            <div>email trop long</div>
            <?php
            break;

        case 'already':
            ?>
            <div>Compte déjà existant</div>
        <?php
    }
}
?>
<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Mon compte</title>
</head>
<body>
    <div class="container mt-5">
        <form action="/CRM_MMA/controller/adhesion_traitement.php" method="post" name="adhesion" class="row g-3 needs-validation">
            <div class="col-md-6">
                <label for="name" >nom</label>
                <input id="name" class="form-control"" type="text"  name="name">
            </div>
            <div class="col-md-6">
                <label for="firstname" >prenom</label>
                <input id="firstname" class="form-control" type="text"  name="firstname">
            </div>
            <div class="col-md-6">
                <label for="phone" >tel</label>
                <input id="phone" class="form-control" type="tel"  name="phone">
            </div>
            <div class="col-md-6">
                <label for="mail" >email</label>
                <input id="mail" class="form-control" type="email"  name="mail">
            </div>
            <div class="col-md-6">
                <label for="birthday" >date de naissane</label>
                <input id="birthday" class="form-control" type="date"  name="birthday">
            </div>
            <div class="col-md-6">
                <label for="weight" >poid</label>
                <input id="weight" class="form-control" type="number"  name="weight">
            </div>
            <div class="col-md-6">
                <label for="sex" >sex</label>
                <input id="sex" class="form-control" type="text"  name="sex">
            </div>
            <div class="col-md-6">
                <label for="address" >adresse</label>
                <input id="address" class="form-control" type="text"  name="address">
            </div>
            <div class="col-md-6">
                <label for="postalcode" >code Postal</label>
                <input id="postalcode" class="form-control" type="number"  name="postalcode">
            </div>
            <div class="col-md-6">
                <label for="town" >ville</label>
                <input id="town" class="form-control" type="text"  name="town">
            </div>
            <div class="col-md-6">
                <label for="password" >mot de passe</label>
                <input id="password" class="form-control" type="password"  name="password">
            </div>
            <div class="col-md-12">
                <input type="submit" value="s'inscrire" class="btn btn-primary">
            </div>
            <p><a href="/CRM_MMA/view/php/landing.php" class="btn btn-primary my-3">Retour</a></p>
        </form>
    </div>
</body>
</html>


