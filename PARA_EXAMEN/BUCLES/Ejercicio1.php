<?php

//ordenando de mayor a menor 3 numeros aleatorios usando solamente bucles

    $random1 = rand(1,100);
    $random2 = rand(1,100);
    $random3 = rand(1,100);

    if($random1 > $random2){
        if($random1 > $random3){
            if ($random2 > $random3){
                echo "<h1>$random1</h1>";
                echo "<h2>$random2</h2>";
                echo "<h3>$random3</h3>";
            }else{
                echo "<h1>$random1</h1>";
                echo "<h2>$random3</h2>";
                echo "<h3>$random2</h3>";
            } 
        }else{
            if ($random3 > $random2){
                echo "<h1>$random3</h1>";
                echo "<h2>$random2</h2>";
                echo "<h3>$random1</h3>";
            }else{
                echo "<h1>$random3</h1>";
                echo "<h2>$random1</h2>";
                echo "<h3>$random2</h3>";
            } 
        }
    }else if ($random2 > $random1){
        if($random2 > $random3){
            if($random1 > $random3){
                echo "<h1>$random2</h1>";
                echo "<h2>$random1</h2>";
                echo "<h3>$random3</h3>";
            }else{
                echo "<h1>$random2</h1>";
                echo "<h2>$random3</h2>";
                echo "<h3>$random1</h3>";
            }
        }else{
            if($random2 > $random1){
                echo "<h1>$random3</h1>";
                echo "<h2>$random2</h2>";
                echo "<h3>$random1</h3>";
            }else{
                echo "<h1>$random3</h1>";
                echo "<h2>$random1</h2>";
                echo "<h3>$random2</h3>";
            }
        }
    }
?>