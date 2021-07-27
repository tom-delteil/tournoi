<?php

    session_start();
    require_once 'config.php';

    if(isset($_POST['mail']) && isset($_POST['password'])){
        $email = htmlspecialchars($_POST['mail']);
        $password = htmlspecialchars($_POST['password']);
        
        $check = $bdd->prepare('SELECT mail, password FROM utilisateur WHERE mail = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();
        
        if($row == 1){
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                $password = hash('sha256', $password);
                if($data['password'] === $password){
                  $_SESSION['user'] = $data['mail'];
                  header('location:landing.php');
                } else header('location:index.php?login_err=password');
            } else header('location:index.php?login_err=email');
        } else header('location:index.php?login_err=already');
    } else header('location:index.php');