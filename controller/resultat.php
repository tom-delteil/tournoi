<?php

require "/CRM_MMA/controller/compet_controller.php";

$bdd = new PDO('mysql:host=localhost;dbname=bdd_tournoi', 'root', 'root'); 
$select = $bdd->prepare("SELECT * FROM competiteur WHERE `tournoi_id`=:id");
$select->bindParam(':id', $id, PDO::PARAM_INT);
Tools::pr($select->execute());
//$result = $select->fetchAll();

//Tools::pr($select->fetchAll());

//realiserTournoi($resultatsTournois, $playerName);
