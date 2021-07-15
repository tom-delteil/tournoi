
    <?php
        require "tools.php";

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
        

         function realiserTournoi(?array $resultatsTournois, array $listeJoueurs) : array{
            
            $resultat = array();
            $tabPerdant = array();
            array_push($resultat, $listeJoueurs);
            Tools::pr($listeJoueurs);
            
            $tourNumber = 1;
            
            while(count($listeJoueurs) > 1) {
                Tools::pr('Tour : '. $tourNumber);
               
                $resultatTour = array();
                for ($i = 0; $i < count($listeJoueurs); $i++){
                    
                $gagnant = jouerMatch($listeJoueurs[$i], $listeJoueurs[$i + 1]);
                array_push($resultatTour,$gagnant);
                
                if($gagnant == $listeJoueurs [$i]){
                    $perdant = $listeJoueurs [$i + 1];
                } else {
                    $perdant = $listeJoueurs [$i];
                }
                    
                // Search
                $pos = array_search($perdant, $listeJoueurs);

                Tools::pr('perdant found at: ' . $pos);

                // Remove from array
                unset($listeJoueurs[$pos]);
                $listeJoueurs = array_values($listeJoueurs);
//                pr($listeJoueurs);
                
                }
                array_push($resultat,$resultatTour);
                $tourNumber++;
            }
//            pr($resultat);
            return $resultat;
                
        }  

        
        
    ?>