<?php

require_once 'config.php';

if ($_POST['email'] === "" && $_POST['password'] === "") {
    header('location:/CRM_MMA/view/php/inscription.php?form_empty=1');
    die();
}
if ($_POST['email'] === "") {
    header('location:/CRM_MMA/view/php/inscription.php?form_empty=2');
    die();
}
if ($_POST['password'] === "") {
    header('location:/CRM_MMA/view/php/inscription.php?form_empty=3');
    die();
}
    
if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirm_mdp'])){
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $confirm_mdp = htmlspecialchars($_POST['confirm_mdp']);
    
    
    $check = $bdd->prepare('SELECT mail, password FROM utilisateur WHERE mail = ?');
    $check->execute(array($email));
    $data = $check->fetch();
    $row = $check->rowCount();
    
    if($row !== 0){
        header('location: /CRM_MMA/view/php/inscription.php?reg_err=already');
        die();
    }
    if(strlen($email) >= 100){
        header('location: /CRM_MMA/view/php/inscription.php?reg_err=mail_length');
        die();
    }
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo '...';
//        die();
    } else {
        header('location: /CRM_MMA/view/php/inscription.php?reg_err=mail');
        die();
    }
    if($password !== $confirm_mdp){ 
        echo 'password';
        header('location: /CRM_MMA/view/php/inscription.php?reg_err=password');
        die();
    }
    $password = hash('sha256', $password);

    $insert = $bdd->prepare('INSERT INTO utilisateur (`mail`, `password`)'. 'VALUES(:mail, :password)');
    $insert->execute(array(
       'mail' => $email,
       'password' => $password
    ));
    header('location:/CRM_MMA/view/php/inscription.php?reg_err=success');

}


//if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirm_mdp'])){
//    $email = htmlspecialchars($_POST['email']);
//    $password = htmlspecialchars($_POST['password']);
//    $confirm_mdp = htmlspecialchars($_POST['confirm_mdp']);
//    
//    
//    $check = $bdd->prepare('SELECT mail, password FROM utilisateur WHERE mail = ?');
//    $check->execute(array($email));
//    $data = $check->fetch();
//    $row = $check->rowCount();
//    
//    if($row == 0){
//        if(strlen($email) <= 100){
//            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
//                if($password == $confirm_mdp){ 
//                    $password = hash('sha256', $password);
//                    
//                    $insert = $bdd->prepare('INSERT INTO utilisateur (`mail`, `password`)'. 'VALUES(:mail, :password)');
//                    
//                    $insert->execute(array(
//                       'mail' => $email,
//                       'password' => $password
//                    ));
//                    header('location:/CRM_MMA/view/php/inscription.php?reg_err=success');
//                } else {
//                    header('location: /CRM_MMA/view/php/inscription.php?reg_err=password');
//                }
//            } else {
//                header('location: /CRM_MMA/view/php/inscription.php?reg_err=mail');
//            }
//        } else {
//            header('location: /CRM_MMA/view/php/inscription.php?reg_err=mail_length');
//        }
//    } else {
//        header('location: /CRM_MMA/view/php/inscription.php?reg_err=already');
//    }
//}
