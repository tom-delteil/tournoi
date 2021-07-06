<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>creer tournoi</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    </head>
    <body>
        <form action="form/php/form_tournoi.php" method="post">

            <div><input type="text" name="name-tournoi"></div>
            <div><input type="submit"></div>
        
        </form>
        <?php
            require "tools.php";
            $bdd = new PDO('mysql:host=localhost;dbname=bdd_tournoi', 'root', 'root'); 
            $requete = $bdd->prepare('SELECT * FROM tournoi');
            $result = $requete->execute();
            while ($row = $requete->fetch(PDO::FETCH_ASSOC))
            {
//                Tools::pr($row);
                echo '<p>'.$row['name'].'</p>';
            }
        ?>
        
        
    </body>
    
</html>
