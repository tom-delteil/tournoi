<?php

    require "joueur.php";
    require 'tools.php';
//    require "form.php";

    $bdd = new PDO('mysql:host=localhost;dbname=bdd_tournoi', 'root', 'root'); 
//  $requete = $bdd->prepare('INSERT INTO competiteur(name), tournoi_id VALUES(?, 1)');
    $select = $bdd->prepare('SELECT * FROM competiteur WHERE `tournoi_id`=:id');
    $select->bindParam(':id', $_POST['tournoi_id']);
    $select->execute();
    $result = $select->fetchAll();
//        Tools::pr($requete->fetchAll());
//  $requete->execute(array($mesJoueurs[0]));


//      Tools::pr($_POST);
    
    if($_POST['update'] == true){
        $delete = $bdd->prepare ("DELETE FROM `competiteur` WHERE `tournoi_id`=:id");
        $delete->bindParam(':id', $_POST['tournoi_id']);
        $delete->execute();

    }
    
    $insert = $bdd->prepare ('INSERT INTO `competiteur` (`id`, `name`, `tournoi_id`) VALUES (NULL, ?, ?)');
    foreach ($_POST['playerName'] as $joueur){
       if($joueur != ''){
            $insert->execute(array($joueur, $_POST['tournoi_id'])); 
       }

    }
               
    header("Refresh:0; url=cree_joueur_file/cree_joueur.php?tournoi_id=".$_POST['tournoi_id']);        
?>
 

