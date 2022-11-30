<?php
    //concatenar cadenas con funcion implode o con un bucle
    
    function concatenar (string $separador, string ...$cadenas)
    {
        $salida = "";
        $primero = true;
        foreach($cadenas as $cadena)
        {
            if($primero){
                $primero = false;
                $salida = $cadena;
            }else{
                $salida .= $separador.$cadena;
            }
        }
        return $salida;
    }

    //implode une elementos de un array en un string
    function concatenar2 (string $separador, string ...$cadenas)
    {
        return implode($separador, $cadenas);
    }

    echo concatenar(" ", "Hola", "mundo", "!") . "<br>"; // Hola mundo !
    echo concatenar(".", "Esto", "son", "varias", "cadenas", "puntos") . "<br>"; //Esto.son.varias.cadenas.puntos

    echo concatenar2(" ", "Hola", "mundo", "!"); // Hola mundo !
    echo concatenar2(".", "Esto", "son", "varias", "cadenas", "puntos"); //Esto.son.varias.cadenas.puntos
?>