
<?php
    $mesTournois = array_values($_POST);

    $bdd = new PDO('mysql:host=localhost;dbname=bdd_tournoi', 'root', 'root'); 
//  $requete = $bdd->prepare('INSERT INTO competiteur(name), tournoi_id VALUES(?, 1)');
    $select = $bdd->prepare('SELECT * FROM tournoi');
    $select->execute();
    $insert = $bdd->prepare ('INSERT INTO `tournoi` (`id`, `name`) VALUES (NULL, ?)');
    $insert->execute(array($mesTournois[0]));
    header("Refresh:0; url=/CRM_MMA/view/html/index_tournoi.php");
?>