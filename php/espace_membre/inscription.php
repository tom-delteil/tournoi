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


<form action="inscription_traitement.php" method="post" name="inscription">
    <div>
        <label for="name" >nom</label>
        <input id="name" class="inputDesign" type="text"  name="name">
    </div>
    <div>
        <label for="firstname" >prenom</label>
        <input id="firstname" class="inputDesign" type="text"  name="firstname">
    </div>
    <div>
        <label for="phone" >tel</label>
        <input id="phone" class="inputDesign" type="tel"  name="phone">
    </div>
    <div>
        <label for="mail" >email</label>
        <input id="mail" class="inputDesign" type="email"  name="mail">
    </div>
    <div>
        <label for="birthday" >date de naissane</label>
        <input id="birthday" class="inputDesign" type="date"  name="birthday">
    </div>
    <div>
        <label for="weight" >poid</label>
        <input id="weight" class="inputDesign" type="number"  name="weight">
    </div>
    <div>
        <label for="sex" >sex</label>
        <input id="sex" class="inputDesign" type="text"  name="sex">
    </div>
    <div>
        <label for="address" >adresse</label>
        <input id="address" class="inputDesign" type="text"  name="address">
    </div>
    <div>
        <label for="postalcode" >code Postal</label>
        <input id="postalcode" class="inputDesign" type="number"  name="postalcode">
    </div>
    <div>
        <label for="town" >ville</label>
        <input id="town" class="inputDesign" type="text"  name="town">
    </div>
    <div>
        <label for="password" >mot de passe</label>
        <input id="password" class="inputDesign" type="password"  name="password">
    </div>
    <div>
        <input type="submit" value="s'inscrire">
    </div>
    <p><a href="index.php">se connecter</a></p>
</form>


