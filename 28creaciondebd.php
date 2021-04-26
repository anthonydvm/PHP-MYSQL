<?php 

    $servidor = 'localhost';
    $username = 'root';
    $password = '';
    $db = "todolistDB";

    $conexion = new mysqli($servidor, $username, $password, $db);

    if($conexion-> connect_error){
        die("Se encontro el siguiente error: " . $conexion -> connect_error);
    }

     //CREACION DE DATA DE BASE
   /*
   $sql = "CREATE DATABASE todolistDB";

    if($conexion->query($sql) === true){
        echo "Base de datos creada correctamente...";
    }
    else{
        die("Error al crear base de datos: " . $conexion->error);
    }
    */

    $sql = "CREATE TABLE todoTable(
        id INT (11) AUTO_INCREMENT PRIMARY KEY,
        texto VARCHAR (100) NOT NULL,
        completado BOOLEAN NOT NULL,
        timestamp TIMESTAMP
    )";

    if ($conexion->query($sql) === true){
        echo "La tabla se creo correctamente";
    }else{
        die("Error al crear la tabla" . $conexion->error);
    }


?>