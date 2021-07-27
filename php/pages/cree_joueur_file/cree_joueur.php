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
        <!--<form action="<?php // echo "#?tournoi_id=".$row['id']; ?>" method="post">-->

            <div id="playerForms">
                <div><input type="text" name="playerName[]" value="<?php
                    if (isset($result[0])) {
                        echo $result[0]['name'];
                    };
                    ?>" required ></div>
                <div><input type="text" name="playerName[]" value="<?php
                    if (isset($result[1])) {
                        echo $result[1]['name'];
                    };
                    ?>" required ></div>
                <div><input type="text" name="playerName[]" value="<?php
                            if (isset($result[2])) {
                                echo $result[2]['name'];
                            };
                            ?>" required ></div>
                <div><input type="text" name="playerName[]" value="<?php
                    if (isset($result[3])) {
                        echo $result[3]['name'];
                    };
                    ?>" required ></div>
                <div><input type="text" name="playerName[]" value="<?php
                    if (isset($result[4])) {
                        echo $result[4]['name'];
                    };
                    ?>" required ></div>
                <div><input type="text" name="playerName[]" value="<?php
                            if (isset($result[5])) {
                                echo $result[5]['name'];
                            };
                    ?>" required ></div>
                <div><input type="text" name="playerName[]" value="<?php
                if (isset($result[6])) {
                    echo $result[6]['name'];
                };
                ?>" required ></div>
                <div><input type="text" name="playerName[]" value="<?php
                if (isset($result[7])) {
                    echo $result[7]['name'];
                };
                ?>" required ></div>
            </div>
            <div><input type="hidden" name="tournoi_id" value="<?php echo $id; ?>"></div>  
            <div><input type="hidden" name="update" value="
        <?php
        if (isset($result[0])) {
            echo "true";
        } else {
            echo "false";
        }
        ?>"></div>  

        <div><input type="submit" value="<?php
        if (isset($result[0])) {
            echo "Mettre à jour";
        } else {
            echo "Sauvegarder";
        }
        ?>"></div>        
        </form>
        <button onclick="tirerAuSort()">Tirer au sort</button>
        <div id="premier_tour"></div>

        <main id="poule">
            <ul id="round-1" class="round">
                <li class="spacer">&nbsp;</li>

                <li class="game game-top winner">
                    <label id="player-1" class="allPlayer" for="i-player-1"></label>
                    <input id="i-player-1" type='number' min='0' max='99' onchange='comparateurScore(this, "#i-player-2", "R2player-1")'>
                    </input>
                </li>
                <li class="game game-spacer">&nbsp;</li>
                <li class="game game-bottom ">
                    <label id="player-2" class="allPlayer" for="i-player-2"></label>
                    <input id="i-player-2" type='number' min='0' max='99' onchange='comparateurScore(this, "#i-player-1", "R2player-1")'>
                    </input>
                </li>

                <li class="spacer">&nbsp;</li>

                <li class="game game-top winner">
                    <label id="player-3" class="allPlayer" for="i-player-3"></label>
                    <input id="i-player-3" type='number' min='0' max='99' onchange='comparateurScore(this, "#i-player-4", "R2player-2")'>
                    </input>
                </li>
                <li class="game game-spacer">&nbsp;</li>
                <li class="game game-bottom ">
                    <label id="player-4" class="allPlayer" for="i-player-4"></label>
                    <input id="i-player-4"type='number' min='0' max='99' onchange='comparateurScore(this, "#i-player-3", "R2player-2")'>
                    </input>
                </li>

                <li class="spacer">&nbsp;</li>

                <li class="game game-top ">
                    <label id="player-5" class="allPlayer" for="i-player-5"></label>
                    <input  id="i-player-5"type='number' min='0' max='99' onchange='comparateurScore(this, "#i-player-6", "R2player-3")'>
                    </input>
                </li>
                <li class="game game-spacer">&nbsp;</li>
                <li class="game game-bottom winner">
                    <label id="player-6" class="allPlayer" for="i-player-6"></label>
                    <input id="i-player-6" type='number' min='0' max='99' onchange='comparateurScore(this, "#i-player-5", "R2player-3")'>
                    </input>
                </li>

                <li class="spacer">&nbsp;</li>

                <li class="game game-top winner">
                    <label id="player-7" class="allPlayer" for="i-player-7"></label>
                    <input id="i-player-7" type='number' min='0' max='99' onchange='comparateurScore(this, "#i-player-8", "R2player-4")'>
                    </input>
                </li>
                <li class="game game-spacer">&nbsp;</li>
                <li class="game game-bottom ">
                    <label id="player-8" class="allPlayer" for="i-player-8"></label>
                    <input id="i-player-8" type='number' min='0' max='99' onchange='comparateurScore(this, "#i-player-7", "R2player-4")'>
                    </input>
                </li>

                <li class="spacer">&nbsp;</li>

            </ul>
            <ul id="round-2" class="round">
                <li class="spacer">&nbsp;</li>

                <li class="game game-top winner">
                    <label id="R2player-1" class="allPlayer" for="i-player-9"></label>
                    <input id="i-player-9" type='number' min='0' max='99' onchange='comparateurScore(this, "#i-player-10", "R3player-1")'>
                    </input>
                </li>
                <li class="game game-spacer">&nbsp;</li>
                <li class="game game-bottom ">
                    <label id="R2player-2" class="allPlayer" for="i-player-10"></label>
                    <input id="i-player-10" type='number' min='0' max='99' onchange='comparateurScore(this, "#i-player-9", "R3player-1")'>
                    </input>
                </li>

                <li class="spacer">&nbsp;</li>

                <li class="game game-top winner">
                    <label id="R2player-3" class="allPlayer" for="i-player-11"></label>
                    <input id="i-player-11" type='number' min='0' max='99' onchange='comparateurScore(this, "#i-player-12", "R3player-2")'>
                    </input>
                </li>
                <li class="game game-spacer">&nbsp;</li>
                <li class="game game-bottom ">
                    <label id="R2player-4" class="allPlayer" for="i-player-12"></label>
                    <input id="i-player-12" type='number' min='0' max='99' onchange='comparateurScore(this, "#i-player-11", "R3player-2")'>
                    </input>
                </li>

                <li class="spacer">&nbsp;</li>

            </ul>
            <ul id="round-3" class="round">
                <li class="spacer">&nbsp;</li>

                <li class="game game-top winner">
                    <label id="R3player-1" class="allPlayer" for="i-player-13"></label>
                    <input id="i-player-13" type='number' min='0' max='99' onchange='comparateurScore(this, "#i-player-14", "winner")'>
                    </input>
                </li>
                <li class="game game-spacer">&nbsp;</li>
                <li class="game game-bottom ">
                    <label id="R3player-2" class="allPlayer" for="i-player-14"></label>
                    <input id="i-player-14" type='number' min='0' max='99' onchange='comparateurScore(this, "#i-player-13", "winner")'>
                    </input>
                </li>

                <li class="spacer">&nbsp;</li>

            </ul>
            <ul id="round-4" class="round">

                <li id="winner" class="game game-top winner"></li>

            </ul>		
        </main>
    </body>
</html>
