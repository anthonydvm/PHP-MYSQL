<?php 
    
    //DECLARACION DE VARIABLE
    $variable = 35;
    $nombre = "Anthony";

    //imprimir variables

    print "mi nombre es " .$nombre ."<br>";
    echo "mi nombre es $nombre" ."<br>";

    $num1 = 5;
    $num2 = 10;

    print "La resta es igual a: "."<br>";
    echo $num2 - $num1. "<br>";

    //arreglos
    $nada = null;
    $carros = array("Sedan", "Camioneta", "Camion");
    $edad = array("Cincuenta", 50, "Diez", 10);

    print_r ($carros);
    echo "<br>";

    //Funciones para strings

    $mensaje = "Hola bienvenido a programacion en php";

    //cantidad de caracteres
    echo strlen($mensaje);
    echo "<br>";

    //cantidad de palabras
    echo str_word_count($mensaje);
    echo "<br>";

    //encontrar texto
    echo strpos($mensaje, "programacion");
    echo "<br>";
    
    //Reeemplazar texto
    echo str_replace("programacion", "electricidad", $mensaje);
    echo "<br>";

    //texto a minuscula
    echo strtolower($mensaje);
    echo "<br>";

    //texto a mayuscula
    echo strtoupper($mensaje);
    echo "<br>";
    
    //comparar cadenas -1 si la 1 esta alfabeticamente mas lejos
    echo strcmp("w", "a");
    echo "<br>";

    //imprimir de un caracter a otro
    echo substr($mensaje, 10, 6);
    echo "<br>";

    //remover exceso de espacios en blanco
    echo trim("             holaaa        anthony");
    echo "<br>";


?>