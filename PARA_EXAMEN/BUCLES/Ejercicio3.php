<?php
//muestra letra a letra de la cadena hasta que se encuentra una ap

    $cadena = "cadena";
    $letra = "";
    
    /*while($letra != "a"){
        $letra = substr($cadena,1);
        echo "<h4>$letra</h4>";
    }*/

    for($i = 0; $i <= strlen($cadena); $i++){
        $letra = substr($cadena,$i,1);
        if($letra != "a"){
            echo "<h4>$letra</h4>";
        }else{
            return "a encontrada";
        }
    }
    
?>