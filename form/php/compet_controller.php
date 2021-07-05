<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

//        $maPoul = creeJoueurs(8);
//        echo 'joueurs : ';
//        echo '<br>';
//        print_r($maPoul);
//        echo '<br>';
//        echo '<br>';
//        
//        
//        echo 'Résultat du tournoi : ';
//        echo '<br>';
//        $resultats = array();
//        $tournoiResult = array();
//        tourTournoi($resultats, $maPoul);
        
        
        function creeJoueurs($joueurQtt){
        
            $joueurs = array();

            for($i = 0; $i < $joueurQtt; $i++){
                    array_push($joueurs, ' joueurs '.($i + 1));
            }
            return $joueurs;
        }


        function jouerMatch($joueur1, $joueur2){
            $random = random_int(1,2);
            if ($random == 1){
                return $joueur1;
            } 
            else{
                return $joueur2;
            }

        }
        
        function pr($data)
        {
            echo "<pre>";
            print_r($data); // or var_dump($data);
            echo "</pre>";
        }
        
        
        function tourTournoi(?array $resultatsTournois, array $listeJoueurs){
            
            $resultat = array();
            array_push($resultat, $listeJoueurs);
            pr($listeJoueurs);
            
            while(count($listeJoueurs) > 1) {
                
                $resultatTour = array();
                foreach ($listeJoueurs as $key => $value){
                    
                    if($key %2 === 0){
                        $gagnant = jouerMatch($listeJoueurs[$key], $listeJoueurs[$key + 1]);
                        array_push($resultatTour,$gagnant);
                        // Search
                        $pos = array_search($gagnant, $listeJoueurs);

                        echo 'gagnant found at: ' . $pos;

                        // Remove from array
                        unset($listeJoueurs[$pos]);
                        $listeJoueurs = array_values($listeJoueurs);
                        pr($listeJoueurs);
                    }
                }
                array_push($resultat,$resultatTour);
                
            }
            return $resultat;
                
        }  
            
//            if(sizeof($listeJoueurs) == 1){ 
//                var_dump($resultatsTournois);
//                return $resultatsTournois;
//            }
//            
//            $resultatTour = array();
//            
//            foreach ($listeJoueurs as $key => $value){
//                if($key %2 == 0){
//                    $gagnant = jouerMatch($listeJoueurs[$key], $listeJoueurs[$key + 1]);
//                    array_push($resultatTour,$gagnant);
//                }
//                
//            }
//
//            array_push($resultatsTournois, $resultatTour);
//            tourTournoi($resultatsTournois, $resultatTour);
//        }
        
//        function test($boxTableau){
//             $testTableau = array(1, 2, 3); 
//            array_push($boxTableau, $testTableau);
//            if(sizeof(test($boxTableau) == 10)){
//                          
//                return $boxTableau;
//            }
//            else{
//             test($testTableau);
//                return;
//            }
//        }
//         
//        $box = array();
//        echo '<br>';
//        $result = test($box);
//        print_r($result);

         

    ?>
</body>
</html>