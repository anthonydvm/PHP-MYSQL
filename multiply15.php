<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: #5492D1;
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
        }
        #container{
            background: white;
            padding: 10px;
            width: 400px;
            margin: 150px auto;
            text-align: center;
            padding-top: 500px;
        }
        .error{
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Multiplicaciones</h2>
        <form action="multiply15.php" class="POST">
            <input type="text" name="numero01" >
            <input type="text" name="numero02" >
            <input type="submit" value="calcular">
            <?php
                include("multiplicar15.php");
                validarCampos(20,30);
            ?>
        </form>
    </div>
</body>
</html>