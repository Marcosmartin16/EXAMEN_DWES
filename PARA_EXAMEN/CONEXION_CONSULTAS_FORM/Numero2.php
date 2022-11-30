<?php
class Numero2 extends General{

private $nombre;

function __construct($nombre,$maxLen,$minLen){
    $this->nombre=$nombre;
    $this->maxLen=$maxLen;
    $this->minLen=$minLen;

}

public function setNombre($nombre){ $this->nombre = $nombre; }

public function getNombre(){ return $this->nombre; }

function crear($valor){
    //hacemos el setter del nombre del input para usarlo para el label y para el error
    $this->nombre;
    //si $valor que es el post esta vacio lo crea por defecto por que no se ha enviado ninguna vez
    if(empty($valor)){
        echo "$this->nombre <input type='number' size='1' max='$this->maxLen' min='$this->minLen' name='$this->nombre' value='' id='$this->nombre'>";
    }else{
        //si la funcion comprobar devuelve true se coloca en el value el valor que le hemos pasado
        if($this->comprobar($valor)){
            echo "$this->nombre <input type='number' size='1' max='$this->maxLen' min='$this->minLen' name='$this->nombre' value='".$valor[$this->nombre]."' id='$this->nombre'>";
        }else{
            //si la funcion comprobar devuelve false salta el error y lo crea por defecto
            echo "$this->nombre <input type='number' size='1' max='$this->maxLen' min='$this->minLen' name='$this->nombre' value='' id='$this->nombre'>";
            //llamamos aqui a la funcion error
            echo $this->error();
        }
    }
}

function comprobar($array){
    //comprueba si dentro array en el posicion de clave que nos devuelve no esta vacio.
    if(!empty($array[$this->nombre])){
        return true;
    }else{
        return false;
    }
}

//nos devuelve el error con el nombre del label que introducimos en el main y utilizamos para crear los input
function error(){
    return "<p>Error deben introducir $this->nombre </p>";
}
}
?>