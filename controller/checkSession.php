<?php

    session_start();
    if(!isset($_SESSION['user'])){
        header('location:/CRM_MMA/view/html/index_connexion.php');
    }
    
?>
