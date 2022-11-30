<?php 
    
    //cuenta numero de elementos de cada tipo 1 int 3 string y 2 array

    function analizParámetros(...$parametros)
    {
        $array = [];
        foreach ($parametros as $value) {
            $tipo = gettype($value);
            array_push($array, $tipo);
        }

        $contados = array_count_values($array);
        return $contados;
    }   
  
  
    $analisis = analizParámetros(3, "h", 'hola', [1,2,3], [1], "h");
    print_r($analisis)
?>
