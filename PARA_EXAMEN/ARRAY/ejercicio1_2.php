<?php

    $comida = [
        0 => ["Banana",3,56],
        1 => ["Chuleta",1,256],
        2 => ["Pan",1,90],
    ];

    //reduce un array a un valor unico en este caso es la multiplicacion de el valor 1 por el 2 y acumula el valor para el siguiente
    $cal = array_reduce($comida,function($acumulador,$valor){
        return $acumulador + ($valor[1] * $valor[2]);
    });

    print_r($cal);

?>