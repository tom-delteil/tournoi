
<?php
    
    require "/CRM_MMA/controller/compet_controller.php";

    $mesJoueurs = array_values($_POST);
    Tools::pr($mesJoueurs);
    echo '<br>';
    echo '<br>';    

    $tournoiTab = array();
    echo 'résultats : ';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    
    $rfesult = realiserTournoi($tournoiTab, array_values($_POST));
    
    Tools::pr($rfesult);
    
    
    
?>

<!--
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
-->

