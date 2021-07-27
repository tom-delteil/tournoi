<?php

require_once 'config.php';

if(isset($_POST['mail']) && isset($_POST['password'])){
    $email = htmlspecialchars($_POST['mail']);
    $password = htmlspecialchars($_POST['password']);
    
    $check = $bdd->prepare('SELECT mail, password FROM utilisateur WHERE mail = ?');
    $check->execute(array($email));
    $data = $check->fetch();
    $row = $check->rowCount();
    
    if($row == 0){
        if(strlen($email) <= 100){
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                if(strlen($password) <= 100){ 
                    $password = hash('sha256', $password);
                    $ip = $_SERVER['REMOTE_ADDR'];
                    
                    $insert = $bdd->prepare('INSERT INTO utilisateur(mail, password, ip) VALUES(:mail, :password, :ip)');
                    $insert->execute(array(
                       'mail' => $email,
                       'password' => $password,
                       'ip' => $ip 
                    ));
                    header('location:inscription.php?reg_err=success');
                } else {
                    header('location: inscription.php?reg_err=password');
                }
            } else {
                header('location: inscription.php?reg_err=mail');
            }
        } else {
            header('location: inscription.php?reg_err=mail_length');
        }
    } else {
        header('location: inscription.php?reg_err=already');
    }
}

