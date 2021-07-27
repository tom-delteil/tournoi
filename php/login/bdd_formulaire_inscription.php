<?php

require '../pages/tools.php';
//echo $_POST['name'];

$request = file_get_contents("insertion_utilisateur.sql");

$bdd = new PDO('mysql:host=localhost;dbname=bdd_tournoi', 'root', 'root');
$insert = $bdd->prepare($request);
$insert->execute (array($_POST['name'],$_POST['firstname'],$_POST['phone'],$_POST['mail'],$_POST['birthday'],$_POST['weight'],$_POST['sex'],$_POST['address']
,$_POST['postalcode'],$_POST['town'],$_POST['password']));

header("Refresh:0; url=login_session.php?utilisateur=".$_POST['name']);
?>
