<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Validar formulario</title>
    <style>
		body{background-color: #264673; box-sizing: border-box; font-family: Arial;}

		form{
			background-color: white;
			padding: 10px;
			margin: 100px auto;
			width: 400px;
		}

		input[type=text], input[type=password]{
			padding: 10px;
			width: 380px;
		}
		input[type="submit"]{
			border: 0;
			background-color: #ED8824;
			padding: 10px 20px;
		}

		.error{
			background-color: #FF9185;
			font-size: 12px;
			padding: 10px;
		}
		.correcto{
			background-color: #A0DEA7;
			font-size: 12px;
			padding: 10px;
		}
	</style>
</head>
<body>
	<form action="form12.php" method="POST">
		<?php

		$nombre = "";
		$password = "";
		$email = "";
		$pais = "";
        $nivel = "";
			
			if(isset($_POST['nombre'])){
				$nombre = $_POST['nombre'];
				$password = $_POST['password'];
				$email = $_POST['email'];
				$pais = $_POST['pais'];
                
                if(isset($_POST['nivel'])){
                    $nivel = $_POST['nivel'];
                }else{
                    $nivel = "";
                }

				$campos = array();

				if($nombre == ""){
					array_push($campos, "El campo Nombre no pude estar vacío");
				}

				if($password == "" || strlen($password) < 6){
					array_push($campos, "El campo Password no puede estar vacío, ni tener menos de 6 caracteres.");
				}

				if($email == "" || strpos($email, "@") === false){
					array_push($campos, "Ingresa un correo electrónico válido.");
				}
				
				if($pais == ""){
					array_push($campos, "Selecciona un pais");
				}
                if($nivel == ""){
					array_push($campos, "Selecciona un nivel de programacion");
				}

				if(count($campos) > 0){
					echo "<div class='error'>";
					for($i = 0; $i < count($campos); $i++){
						echo "<li>".$campos[$i]."</i>";
					}
				}else{
					echo "<div class='correcto'>
							Datos correctos";
				}
				echo "</div>";
			}
		?>
		<p>
		Nombre:<br/>
		<input type="text" name="nombre" value="<?php echo $nombre ?>">
		</p>

		<p>
		Password:<br/>
		<input type="password" name="password">
		</p>

		<p>
		correo electrónico:<br/>
		<input type="text" name="email" value="<?php echo $email ?>">
		</p>
        
        <p>
            Pais de origen <br/>
            <select name="pais" id="">
                <option value="">Selecciona un pais</option>
                <option value="me" <?php if($pais == "me") echo "selected"; ?>>Mexico</option>
                <option value="usa" <?php if($pais == "usa") echo "selected"; ?>>Estados unidos</option>
                <option value="co" <?php if($pais == "co") echo "selected"; ?>>Colombia</option>
                <option value="ar" <?php if($pais == "ar") echo "selected"; ?>>Argentina</option>
                <option value="chi"<?php if($pais == "chi") echo "selected"; ?>>China</option>
            </select>
        </p>
        <p>
            Nivel de desarrollo<br>
            <select name="nivel" id="">
                <input type="radio" name="nivel" value="principiante" <?php if($nivel == "principiante") echo "checked";?>>Principiante
                <input type="radio" name="nivel" value="intermedio" <?php if($nivel == "intermedio") echo "checked"; ?>> Intermedio
			<input type="radio" name="nivel" value="avanzado" <?php if($nivel == "avanzado") echo "checked"; ?>> Avanzado
            </select>
        </p>

		<p><input type="submit" value="enviar datos"></p> 
	</form>
</body>
</html>