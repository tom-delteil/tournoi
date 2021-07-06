
<?php
    
    require "compet_controller.php";

    $mesJoueurs = array_values($_POST);
    Tools::pr($mesJoueurs);
    echo '<br>';
    echo '<br>';    




    $bdd = new PDO('mysql:host=localhost;dbname=bdd_tournoi', 'root', 'root'); 
//    $requete = $bdd->prepare('INSERT INTO competiteur(name), tournoi_id VALUES(?, 1)');
    $requete = $bdd->prepare('SELECT * FROM tournoi');
    $requete->execute();
    $requete2 = $bdd->prepare ('INSERT INTO `tournoi` (`id`, `name`) VALUES (NULL, ?)');
//    $requete->execute(array($mesJoueurs[0]));
    $requete2->execute(array($mesJoueurs[0]));


    $tournoiTab = array();
    echo 'résultats : ';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    
    $rfesult = realiserTournoi($tournoiTab, array_values($_POST));
    
    Tools::pr($rfesult);
    
    
    
?>

<!--
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
-->

