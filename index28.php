<?php 

    $servidor = 'localhost';
    $username = 'root';
    $password = 'anthonydavid2';

    $conexion = new mysqli($servidor, $username, $password);

    if($conexion -> connect_error)

?>