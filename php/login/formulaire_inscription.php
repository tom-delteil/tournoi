<!DOCTYPE html>
<html>
    <head>
        <title>Fiche d'inscription</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/formulaire_inscription.css">
        <script src="../../javascript/formulaire_inscription.js"></script>
<!--    <link rel="stylesheet" type="text/css" href="/DataTables/datatables.css">
        <script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script>-->
    </head>
    <body>
        
        <?php 
            if(!empty($_POST)){
                $errors = array();
                
                if(empty($_POST)){
                    $errors['name'] = "Vous n'avez pas entrer de Nom";
                }
                var_dump($errors);
                
            }
        ?>
        
        <form action="bdd_formulaire_inscription.php" method="post" name="inscription">
            <div><input class="inputDesign" type="text"  name="name" onfocus="this.value =''" value="Nom"></div>
            <div><input class="inputDesign" type="text"  name="firstname" onfocus="this.value =''" value="Prénom"></div>
            <div><input class="inputDesign" type="tel"  name="phone" onfocus="this.value =''" value="Téléphone"></div>
            <div><input class="inputDesign" type="email"  name="mail" onfocus="this.value =''" value="Mail"></div>
            <div><input class="inputDesign" type="date"  name="birthday" onfocus="this.value =''" value="2018-07-22"></div>
            <div><input class="inputDesign" type="number"  name="weight" onfocus="this.value =''" value="80"></div>
            <div><input class="inputDesign" type="text"  name="sex" onfocus="this.value =''" value="sexe"></div>
            <div><input class="inputDesign" type="text"  name="address" onfocus="this.value =''" value="Adresse postale"></div>
            <div><input class="inputDesign" type="number"  name="postalcode" onfocus="this.value =''" value="13390"></div>
            <div><input class="inputDesign" type="text"  name="town" onfocus="this.value =''" value="Ville"></div>
            <div><input class="inputDesign" type="password"  name="password" onfocus="this.value =''" value="Mot de passe"></div>
            <div><input type="submit" value="s'inscrire"></div>
            <p><a href="#">se connecter</a></p>
            <p><a href="#">se connecter en tant que admin</a></p>
        </form>
<!--            <table>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Téléphone</th>
                    <th>Mail</th>
                    <th>Adresse postale</th>
                    <th>Ville</th>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>-->
    </body>
</html>
