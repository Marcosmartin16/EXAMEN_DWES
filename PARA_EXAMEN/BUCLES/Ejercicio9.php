<?php 

//intercambio de valor de variables sin perder el valor original usando variable temporal

    $uno = 10;
    $dos = "dos";

    function intercambio($a, $b){
        
        $temp = $a;
        $a = $b;
        $b = $temp;

        return $a . " " . $b;
    }

    echo intercambio($uno, $dos);
?>