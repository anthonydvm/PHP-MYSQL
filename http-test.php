<?php

   /* echo "Hola mundo <br><br>";
    echo "Saludos";
    
    $humedad = $_GET['hum'];

    echo "<br> $temperatura <br>";
    echo "<br> $humedad <br>";
    
    if ( $temperatura < 29){
        echo "Status -> ON";
    }else{
        echo "Status -> OFF";
    }
    */
    $temperatura = $_GET['temp'];
    if ( $temperatura < 29){
        echo "Status -> ON <br><br>";
    }else{
        echo "Status -> OFF";
    }
    echo "hola"; 
?>

<meta http-equiv="refresh" content = "2";>