<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #container{
            width: 500px;
            margin: 150px auto;
            text-align: center;
        }
        #footer{
            background-color: #222;
            padding: 10px;
            color: white;
            text-align: center;
        }
        #menu{
            background-color: #eee;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div id="container">
    <?php
        include("menu14.php");
    ?>
    <h3>Contenido principal</h3>
    <?php 
        include("footer14.php");
    ?>
    
    </div>
</body>
</html>