
<?php
    
    require "compet_controller.php";
    pr($_POST);
    echo '<br>';
    echo '<br>';
    

    $tournoiTab = array();
    echo 'résultats : ';
    echo '<br>';
    echo '<br>';
    
    $rfesult = tourTournoi($tournoiTab, array_values($_POST));
    print_r($rfesult);
    
    
    
?>

<!--
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
-->

