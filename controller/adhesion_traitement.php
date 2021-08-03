<?php

require_once 'config.php';

if(isset($_POST['mail']) && isset($_POST['password'])){
    $name = htmlspecialchars($_POST['name']);
    $firstname = htmlspecialchars($_POST['firstname']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['mail']);
    $birthday = htmlspecialchars($_POST['birthday']);
    $weight = htmlspecialchars($_POST['weight']);
    $sex = htmlspecialchars($_POST['sex']);
    $address = htmlspecialchars($_POST['address']);
    $postalcode = htmlspecialchars($_POST['postalcode']);
    $town = htmlspecialchars($_POST['town']);
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
                    
                    $insert = $bdd->prepare('INSERT INTO utilisateur(`name`, `firstname`, `phone`, `mail`, `birthday`, `weight`, `sex`, `address`, `postal code`, `town`, `password`)'
                    . 'VALUES(:name, :firstname, :phone, :mail, :birthday, :weight, :sex, :address, :postalcode, :town, :password)');
                    
                    $insert->execute(array(
                       'name' => $name,
                       'firstname' => $firstname,
                       'phone' => $phone,
                       'mail' => $email,
                       'birthday' => $birthday,
                       'weight' => $weight,
                       'sex' => $sex,
                       'address' => $address,
                       'postalcode' => $postalcode,
                       'town' => $town,
                       'password' => $password
                    ));
                    header('location:/CRM_MMA/view/php/adhesion.php?reg_err=success');
                } else {
                    header('location: /CRM_MMA/view/php/adhesion.php?reg_err=password');
                }
            } else {
                header('location: /CRM_MMA/view/php/adhesion.php?reg_err=mail');
            }
        } else {
            header('location: /CRM_MMA/view/php/adhesion.php?reg_err=mail_length');
        }
    } else {
        header('location: /CRM_MMA/view/php/adhesion.php?reg_err=already');
    }
}

