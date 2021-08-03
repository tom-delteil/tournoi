<?php
require_once '../../controller/config.php';

$request = file_get_contents("users.sql");
$check = $bdd->prepare($request);
$check->execute();
$data = $check->fetchAll();
$result = (object) array('data' => $data);
echo json_encode($result);
