<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/34style.css">
    <title>Document</title>
</head>

<body>
    <div id="main-container">
        <form id="nuevo-pendiente-container" action="34inyeccionsql.php" method="GET">
            <p>Buscar nombre de usario por id</p>
            <input type="text" name="id">
            <input type="submit" value="Buscar">

            <div id="resultado">
                <?php

                if (isset($_GET['id'])) {
                    //CONEXIÓN A BASE DE DATOS
                    $servidor = 'localhost';
                    $username = 'root';
                    $password = '';
                    $db = "todolistdb";

                    $conexion = new mysqli($servidor, $username, $password, $db);

                    if ($conexion->connect_error) {
                        die("Se encontro el siguiente error: " . $conexion->connect_error);
                    }

                  
                    $id = $_GET['id'];

                    $sql = "SELECT nombre FROM usuarios WHERE id=$id ";

                    $resultado = $conexion->query($sql);

                    while ($row = $resultado->fetch_assoc()) {
                        echo $row['nombre'];
                    }
                }
                ?>
            </div>
        </form>
    </div>
</body>

</html>