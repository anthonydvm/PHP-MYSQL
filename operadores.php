<?php

    $x= 5;
    $y= 10;

    echo $x + $y;
    echo "<br>";
    echo $x += $y;
    echo "<br>";
    
    echo $x - $y;
    echo "<br>";
    
    echo $x * $y;
    echo "<br>";
    
    echo $x / $y;
    echo "<br>";
    
    //residuo
    echo $x % $y;
    echo "<br>";

    //potencia
    echo $x ** $y;
    echo "<br>";

    //Comparacion con 2 iguales no importa el tipo de dato, 3 iguales si importa el tipo de dato que compare    
    $xx = "5";
    $yy = 5;

    echo var_dump($xx == $yy);
    echo "<br>";
    echo var_dump($xx === $yy);
    echo "<br>";
    

    
?>