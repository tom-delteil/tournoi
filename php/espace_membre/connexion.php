<?php

session_start();
require_once 'config.php';

if ($_POST['email'] === "" && $_POST['password'] === "") {
    header('location:index.php?form_empty=1');
    die();
}
if ($_POST['email'] === "") {
    header('location:index.php?form_empty=2');
    die();
}
if ($_POST['password'] === "") {
    header('location:index.php?form_empty=3');
    die();
}
$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);

$check = $bdd->prepare('SELECT mail, password FROM utilisateur WHERE mail = ?');
$check->execute(array($email));
$data = $check->fetch();
$row = $check->rowCount();

//print_r($data);
$request = file_get_contents("users2.sql");
//$check = $bdd->prepare($request);
//$check->execute(array($email));
//$data = $check->fetch();
//$row = $check->rowCount();

if (!$row == 1) {
    header('location:index.php?form_empty=4');
    die();
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('location:index.php?form_empty=5');
    die();
}

$password = hash('sha256', $password);
if (!$data['password'] === $password) {
    header('location:index.php?form_empty=6');
    die();
}

$_SESSION['user'] = $data['mail'];
header('location:landing.php');



