<?php

session_start();
require_once 'config.php';

if ($_POST['pseudo'] === "" && $_POST['password'] === "") {
    header('location:index.php?form_empty=1');
    die();
}
if ($_POST['pseudo'] === "") {
    header('location:index.php?form_empty=2');
    die();
}
if ($_POST['pseudo'] === "") {
    header('location:index.php?form_empty=3');
    die();
}
$pseudo = htmlspecialchars($_POST['pseudo']);
$password = htmlspecialchars($_POST['password']);

$check = $bdd->prepare('SELECT name, password FROM adminlogin WHERE name = ?');
$check->execute(array($pseudo));
$data = $check->fetch();
$row = $check->rowCount();

if (!$row == 1) {
    header('location:index.php?form_empty=4');
    die();
}






$password = hash('sha256', $password);
if ($data['password'] == $password) {
    $_SESSION['user'] = $data['name'];
    header('location:admin_accound.php');
} else {
//                    header('location:index.php?login_err=password'); 
    echo "mot de passe non valide";
    echo '<br>';
    echo $password;
    echo '<br>';
    echo $data['password'];
}

