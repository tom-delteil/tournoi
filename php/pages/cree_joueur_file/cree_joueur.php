<!DOCTYPE html>
<html>
    <head>
    
        <title>Formulaire</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/cree_joueur.css">
    </head>
    <body>
        <?php
            require '../tools.php';
//            print_r($_GET);
//            print_r($_GET['tournoi_id']); 
            //récupération des donnée en get
            $id = $_GET['tournoi_id'];
            
            //connexion bdd + exectution de la requete avec un paramètre
            $bdd = new PDO('mysql:host=localhost;dbname=bdd_tournoi', 'root', 'root'); 
            $select = $bdd->prepare("SELECT * FROM competiteur WHERE `tournoi_id`=:id");
            $select->bindParam(':id', $id, PDO::PARAM_INT);
            $select->execute();
//            $requete->debugDumpParams();
            
//            print_r($requete->fetch(PDO::FETCH_ASSOC));
           $result = $select->fetchAll();
//           Tools::pr($result);
//            
//            while ($row = $requete->fetch(PDO::FETCH_ASSOC)){
//                echo '<p>'.$row['name'].'</p>';
//            }
            
            
        ?>
        
        <form action="../playerbdd.php" method="post">
        <!--<form action="<?php // echo "#?tournoi_id=".$row['id'];?>" method="post">-->


            <div><input type="text" name="playerName[]" value="<?php if(isset($result[0])){ echo $result[0]['name'];};?>"></div>
            <div><input type="text" name="playerName[]" value="<?php if(isset($result[1])){ echo $result[1]['name'];};?>"></div>
            <div><input type="text" name="playerName[]" value="<?php if(isset($result[2])){ echo $result[2]['name'];};?>"></div>
            <div><input type="text" name="playerName[]" value="<?php if(isset($result[3])){ echo $result[3]['name'];};?>"></div>
            <div><input type="text" name="playerName[]" value="<?php if(isset($result[4])){ echo $result[4]['name'];};?>"></div>
            <div><input type="text" name="playerName[]" value="<?php if(isset($result[5])){ echo $result[5]['name'];};?>"></div>
            <div><input type="text" name="playerName[]" value="<?php if(isset($result[6])){ echo $result[6]['name'];};?>"></div>
            <div><input type="text" name="playerName[]" value="<?php if(isset($result[7])){ echo $result[7]['name'];};?>"></div>
            <div><input type="hidden" name="tournoi_id" value="<?php echo $id;?>"></div>  
            <div><input type="hidden" name="update" value="
                <?php 
                if(isset($result[0])){ 
                    echo "true";
                } else { 
                    echo "false";
                } 
                ?>
                        "></div>  
            <div><input type="submit" value="sauvegarder ou mettre à jour"></div>        
        </form>
    </body>
</html>
