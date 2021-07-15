<!DOCTYPE html>
<html>
    <head>

        <title>Formulaire</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/cree_joueur.css">
        <script src="../../../javascript/script_tournoi.js"></script>
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

            <div id="playerForms">
                <div><input type="text" name="playerName[]" value="<?php if (isset($result[0])) {
            echo $result[0]['name'];
        }; ?>" required ></div>
                <div><input type="text" name="playerName[]" value="<?php if (isset($result[1])) {
            echo $result[1]['name'];
        }; ?>" required ></div>
                <div><input type="text" name="playerName[]" value="<?php if (isset($result[2])) {
            echo $result[2]['name'];
        }; ?>" required ></div>
                <div><input type="text" name="playerName[]" value="<?php if (isset($result[3])) {
            echo $result[3]['name'];
        }; ?>" required ></div>
                <div><input type="text" name="playerName[]" value="<?php if (isset($result[4])) {
            echo $result[4]['name'];
        }; ?>" required ></div>
                <div><input type="text" name="playerName[]" value="<?php if (isset($result[5])) {
                    echo $result[5]['name'];
                }; ?>" required ></div>
                <div><input type="text" name="playerName[]" value="<?php if (isset($result[6])) {
                    echo $result[6]['name'];
                }; ?>" required ></div>
                <div><input type="text" name="playerName[]" value="<?php if (isset($result[7])) {
                    echo $result[7]['name'];
                }; ?>" required ></div>
            </div>
            <div><input type="hidden" name="tournoi_id" value="<?php echo $id; ?>"></div>  
            <div><input type="hidden" name="update" value="
<?php
if (isset($result[0])) {
    echo "true";
} else {
    echo "false";
}
?>
                        "></div>  
            <div><input type="submit" value="<?php if (isset($result[0])) {
    echo "Mettre à jour";
} else {
    echo "Sauvegarder";
} ?>"></div>        
        </form>
        <button onclick="tirerAuSort()">Tirer au sort</button>
        <div id="premier_tour"></div>

        <main id="poule">
            <ul id="round-1" class="round">
                <li class="spacer">&nbsp;</li>

                <li id="player-1"class="game game-top winner"></li>
                <li class="game game-spacer">&nbsp;</li>
                <li id="player-2"class="game game-bottom "></li>

                <li class="spacer">&nbsp;</li>

                <li id="player-3"class="game game-top winner"></li>
                <li class="game game-spacer">&nbsp;</li>
                <li id="player-4"class="game game-bottom "></li>

                <li class="spacer">&nbsp;</li>

                <li id="player-5"class="game game-top "></li>
                <li class="game game-spacer">&nbsp;</li>
                <li id="player-6"class="game game-bottom winner"></li>

                <li class="spacer">&nbsp;</li>

                <li id="player-7"class="game game-top winner"></li>
                <li class="game game-spacer">&nbsp;</li>
                <li id="player-8"class="game game-bottom "></li>

                <li class="spacer">&nbsp;</li>

            </ul>
            <ul id="round-2" class="round">
                <li class="spacer">&nbsp;</li>

                <li id="player1" class="game game-top winner"></li>
                <li class="game game-spacer">&nbsp;</li>
                <li id="player2" class="game game-bottom "></li>

                <li class="spacer">&nbsp;</li>

                <li class="game game-top winner"></li>
                <li class="game game-spacer">&nbsp;</li>
                <li class="game game-bottom "></li>
                
                <li class="spacer">&nbsp;</li>
               
            </ul>
            <ul id="round-3" class="round">
                <li class="spacer">&nbsp;</li>

                <li class="game game-top winner"></li>
                <li class="game game-spacer">&nbsp;</li>
                <li class="game game-bottom "></li>
                
                <li class="spacer">&nbsp;</li>
                
            </ul>
            <ul id="round-4" class="round">

                <li class="game game-top winner"></li>
                
            </ul>		
        </main>
    </body>
</html>
