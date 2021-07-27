<?php

    try {
        $bdd = new PDO('mysql:host=localhost;dbname=bdd_tournoi', 'root', 'root');
    } catch (Exception $ex) {
        die("Erreur".$ex->getMessage());
    }
?>
    


