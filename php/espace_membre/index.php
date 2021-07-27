<!doctype html>

<html>
    <head>
        <title>Fiche d'inscription</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php 
            if(isset($_GET['login_err'])){
                $err = htmlspecialchars($_GET['login_err']);
                
                switch ($err){
                case 'password':
                    ?>
                    <div>Mot de passe incorrect</div>
                <?php 
                break;    
                 
                case 'email':
                    ?>
                    <div>Email incorrect</div>
                <?php 
                break;    
                 
                case 'already':
                    ?>
                    <div>Compte non existant</div>
                <?php 
                break;    
                
                }
            }
        
        ?>
        <form action="connexion.php" method="post">
            <div>
                <input type="email" name="email" onfocus="this.value =''" value="Email">
            </div>
            <div>
                <input type="password" name="password" onfocus="this.value =''" value="Mot de passe">
            </div>
            <div>
                <input type="submit" value="Connexion">
            </div>
            <p><a href="inscription.php">Inscription</a></p>
            <p><a href="#">Inscription Admin</a></p>
            
        </form>
    </body>
</html>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

