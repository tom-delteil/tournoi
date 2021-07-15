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
        <form action="pages/form_tournoi.php" method="post">

            <div><input type="text" name="name-tournoi"></div>
            <div><input type="submit"></div>
        
        </form>
        <?php
//            require "tools.php";
            $bdd = new PDO('mysql:host=localhost;dbname=bdd_tournoi', 'root', 'root'); 
            $select = $bdd->prepare('SELECT * FROM tournoi');
            $result = $select->execute();
            while ($row = $select->fetch(PDO::FETCH_ASSOC))
            {
//                Tools::pr($row);
                echo '<a href = pages/cree_joueur_file/cree_joueur.php?tournoi_id='.$row['id'].'>'.$row['name'].'</a>'.'<br>';
            }
        ?>
        
        
    </body>
    
</html>
