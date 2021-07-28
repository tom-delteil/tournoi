<?php
require_once '../espace_membre/config.php';

$request = file_get_contents("users2.sql");
$check = $bdd->prepare($request);
$check->execute();
$data = $check->fetchAll();
$result = (object) array('data' => $data);
echo json_encode($result);
