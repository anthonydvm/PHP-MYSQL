<?php 
    
    $servidor = "localhost";
    $username = "root";
    $password = "anthonydavid2";

    
    $conexion = new mysqli($servidor, $username, $password);

    if($conexion-> connect_error){
        die("Conexion fallida: " . $conexion-> connect_error);
    }
    else{
        echo ("Conexion exitosa...");
    }

?>