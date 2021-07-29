<?php

session_start();
require_once 'config.php';

$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);

$request = file_get_contents("getLogin.sql");
$check = $bdd->prepare($request);
$check->execute(array($email));
$data = $check->fetch();
$row = $check->rowCount();

$password = hash('sha256', $password);

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
if (!$row == 1) {
    header('location:index.php?form_empty=4');
    die();
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('location:index.php?form_empty=5');
    die();
}

//print_r($data['password']);
//echo '<br>';
//print_r($password);

if ($data['password'] !== $password) {
//    echo'mdp incorrect';
    header('location:index.php?form_empty=6');
    die();
}

$_SESSION['user'] = $data['mail'];

//print_r($data['role']);

if ($data['role'] !== 'adherent'){
    header('location:admin.php');
} else {
   header('location:landing.php');
//   echo 'non !!!';
}









