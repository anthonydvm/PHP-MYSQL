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

    //Texto alrevez
    echo str_rrev($mensaje);
    echo "<br>";
?>