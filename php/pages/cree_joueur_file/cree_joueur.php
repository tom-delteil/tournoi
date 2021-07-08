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
            $requete = $bdd->prepare("SELECT * FROM competiteur WHERE `tournoi_id`=:id");
            $requete->bindParam(':id', $id, PDO::PARAM_INT);
            $requete->execute();
//            $requete->debugDumpParams();
            
//            print_r($requete->fetch(PDO::FETCH_ASSOC));
           $result = $requete->fetchAll();
//           Tools::pr($result);
            
            while ($row = $requete->fetch(PDO::FETCH_ASSOC)){
                echo '<p>'.$row['name'].'</p>';
            }
        ?>
        
        <form action="../form_condition.php" method="post">

            <div><input type="text" name="name-1" value="<?php echo $result[0]['name'];?>"></div>
            <div><input type="text" name="name-2" value="<?php echo $result[1]['name'];?>"></div>
            <div><input type="text" name="name-3" value="<?php echo $result[2]['name'];?>"></div>
            <div><input type="text" name="name-4" value="<?php echo $result[3]['name'];?>"></div>
            <div><input type="text" name="name-5" value="<?php echo $result[4]['name'];?>"></div>
            <div><input type="text" name="name-6" value="<?php echo $result[5]['name'];?>"></div>
            <div><input type="text" name="name-7" value="<?php echo $result[6]['name'];?>"></div>
            <div><input type="text" name="name-8" value="<?php echo $result[7]['name'];?>"></div>
            <div><input type="submit"></div>
        
        </form>
    </body>
</html>
