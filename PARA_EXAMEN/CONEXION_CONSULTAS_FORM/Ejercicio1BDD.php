<?php

spl_autoload_register(function ($class){
    $classPath ="./";
    require("$classPath${class}.php");
});

        $textoN = new Texto("Nombre",20,2);
        $numero = new Numero2("numero",20,1);
        $numeroid = new Numero2("id",20,1);
        $radio = new Radio(["ELIMINAR", "INSERTAR", "ACTUALIZAR"], "accion");

    try {
        $mbd = new PDO('mysql:host=localhost;dbname=examen', "examen", "examen");

        // Utilizar la conexión aquí
        $resultado = $mbd->query('SELECT id,nombre,num_trofeos  FROM Ciclistas');

        $resultado->setFetchMode(PDO::FETCH_ASSOC);

        $resultado->execute();

        while($row = $resultado->fetch()){
            
            echo "<a href='Detalle.php?id=" . $row['id'] . "'>" . $row['nombre'] . "</a> " . $row['num_trofeos']. " <br>";
        }

        if(isset($_POST['enviar'])){

            if($_POST[$radio->getNombre()] == "INSERTAR"){

                $resultado = $mbd->prepare('INSERT INTO Ciclistas VALUES (:id,:nombre,:trofeos)');

                if($textoN->comprobar($_POST) && $numero->comprobar($_POST) && $numeroid->comprobar($_POST)){
    
                    $resultado->bindValue(':id',$_POST[$numeroid->getNombre()]);
                    $resultado->bindValue(':nombre',$_POST[$textoN->getNombre()]);
                    $resultado->bindValue(':trofeos',$_POST[$numero->getNombre()]);
                    
                    $resultado->execute();
    
                }
            }

            if($_POST[$radio->getNombre()] == "ELIMINAR"){

                if($textoN->comprobar($_POST)){

                    $resultado = $mbd->prepare('DELETE FROM Ciclistas WHERE nombre = :nombre');

                    $resultado->bindValue(':nombre',$_POST[$textoN->getNombre()]);
                    
                    $resultado->execute();
                }
            }

            if($_POST[$radio->getNombre()] == "ACTUALIZAR"){

                $resultado = $mbd->prepare('UPDATE Ciclistas SET num_trofeos = :trofeos WHERE nombre = :nombre');

                if($textoN->comprobar($_POST) && $numero->comprobar($_POST)){

                    $resultado->bindValue(':nombre',$_POST[$textoN->getNombre()]);
                    $resultado->bindValue(':trofeos',$_POST[$numero->getNombre()]);
                    
                    $resultado->execute();
                }
            }
            
        }

        

        // Ya se ha terminado; se cierra
        $resultado = null;
        $mbd = null;

    } catch (PDOException $e) {
        print "¡Error!: " . $e->getMessage() . "\n";
        die();
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <?php
            $textoN->crear($_POST);
            $numero->crear($_POST);
            $numeroid->crear($_POST);
            echo "<br><br>";
            $radio->crear($_POST);
        ?>
        <br><br>
        <input type="submit" value="enviar" name="enviar"/>
    </form>
</body>
</html>