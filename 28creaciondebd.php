<?php 

    $servidor = 'localhost';
    $username = 'root';
    $password = 'anthonydavid2';

    $conexion = new mysqli($servidor, $username, $password);

    if($conexion -> connect_error){
        die("Se encontro el siguiente error: " . $conexion -> connect_error);
    }

    $sql = "CREATE DATABASE todolistDB";

    if($conexion->query($sql) === true){
        echo "Base de datos creada correctamente...";
    }
    else{
        die("Error al crear base de datos: " . $conexion->error);
    }



?>