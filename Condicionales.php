<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family: arial;
            background: #BDE85F ;
        }
        div{
            background: white;
            padding: 20px;
            margin: 0 auto;
            width: 200px;
        }
        h1{
            font-size: 36px;
        }
    </style>
</head>
<body>
    <div>
        <?php
            $hora = 20;

            if($hora > 6 && $hora < 12){
                echo "<h1>Buenos dias</h1>";
            }else if($hora >= 12 && $hora <= 18){
                echo "<h1>Buenos tardes</h1>";
            }else{
                echo "<h1>Buenas noches</h1>";
            }

            
        ?>
    </div>
</body>
</html>