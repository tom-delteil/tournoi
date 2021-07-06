
<?php
    $mesTournois = array_values($_POST);

    $bdd = new PDO('mysql:host=localhost;dbname=bdd_tournoi', 'root', 'root'); 
//  $requete = $bdd->prepare('INSERT INTO competiteur(name), tournoi_id VALUES(?, 1)');
    $requete = $bdd->prepare('SELECT * FROM tournoi');
    $requete->execute();
    $requete2 = $bdd->prepare ('INSERT INTO `tournoi` (`id`, `name`) VALUES (NULL, ?)');
    $requete2->execute(array($mesTournois[0]));
    header("Refresh:0; url=../../cree_tournoi.php");
?>