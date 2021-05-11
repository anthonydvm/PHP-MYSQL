<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar datos</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="29indexinsertardat.php" method="POST" >
        <input type="text" name="texto" id="texto">
        <input type="submit" value="añadir pendiente">
    </form>
    <div id="mostrar-todo-container">
        <form id="formMostrarTodo" action="29indexinsertardat.php" method="POST">
            <input type="checkbox" name="mostrar-todo" onchange="mostrarTodo(this)">Mostrar todo
        </form>
    </div>
   
    <div id="todolist">
    
        <?php
            //CONEXIÓN A BASE DE DATOS
            $servidor = 'localhost';
            $username = 'root';
            $password = '';
            $db = "todolistdb";

            $conexion = new mysqli($servidor, $username, $password, $db);

            if($conexion->connect_error){
                die("Se encontro el siguiente error: " . $conexion -> connect_error);
            }

            // VALIDACION DE DATOS PARA INGRESAR
            if(isset($_POST['texto'])){
                $texto = $_POST['texto'];
                
                $sql = "INSERT INTO todotable(texto, completado) 
                                VALUES('$texto', false)";

                if($conexion->query($sql) === true){
                    //echo '<div><form action=""><input type="checkbox">'.$texto.'</form></div>';
                }
                else{
                    die("Error al obtener datos" . $conexion->error);
                }
            }
            
            else if(isset($_POST['completar'])){
              
                $id = $_POST['completar'];

                $sql = "UPDATE todotable SET completado = 1 WHERE id= $id";
                
                if($conexion->query($sql) === true){
                    //echo '<div><form action=""><input type="checkbox">'.$texto.'</form></div>';
                }
                else{
                    die("Error al actualizar los datos" . $conexion->error);
                }
                //ELIMINAR 
            }else if(isset($_POST['eliminar'])){
                
                $id = $_POST['eliminar'];

                $sql = "DELETE FROM todotable WHERE id= $id";
                
                if($conexion->query($sql) === true){
                    //echo '<div><form action=""><input type="checkbox">'.$texto.'</form></div>';
                }
                else{
                    die("Error al actualizar los datos" . $conexion->error);
                }

            }
            //MOSTRAR TODO 
            
            $sql = "";
            if(isset($_POST['mostrar-todo'])){
                
                $ordenar = $_POST['mostrar-todo'];
            
                if($ordenar == "on"){
                    $sql = "SELECT * FROM todotable";
                }                     
            }else{
               $sql = "SELECT * FROM todotable WHERE completado = 0";
            }
            

            //OBTENER DATOS PARA LA TABLA
            $sql= "SELECT * FROM todotable WHERE completado = 0";
            $resultado = $conexion->query($sql);
            
            if($resultado->num_rows > 0){
                while($row = $resultado->fetch_assoc()){
                ?>
                    <div>
                        <form method = "POST" action="" id="form<?php echo $row['id'];?>">
                            <input name = "completar" value = "<?php echo $row['id']; ?>" id = "<?php echo $row['id'];?>" type="checkbox" onchange = "completarPendiente(this)" <?php if($row['completado'] == 1) echo " checked disabled"; ?>> <div class = "texto "> <? if($row['completado'] == 1) echo "deshabilitado";?>><?php echo $row['texto'];?> </div>
                            
                        </form>
                        <h1><?php if($row['id'] == 15) echo $row['texto'];?></h1>
                        <form  method = "POST" action="29indexinsertardat.php" id="form_delete_<?php echo $row['id'];?>">
                            <input type="hidden" name="eliminar" value="<?php echo $row['id']; ?>">
                            <input type="submit" value="eliminar">
                        </form>
                    </div>
                <?php
                }
            }

            $conexion->close();
        ?>
    </div>
    <script>
        function completarPendiente(e){
            var id = "form" + e.id;
            var formulario = document.getElementById(id);
            formulario.submit();
            console.log(id);
        }

        function mostrarTodo(e){
            var formulario = document.getElementById("formMostrarTodo");
            formulario.submit();
        }
    </script>
</body>
</html>