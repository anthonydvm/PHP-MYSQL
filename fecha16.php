<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .container{
        background: white;
        margin: 100px auto;
        padding: 100px;
        text-align: center;
    }
    </style>
</head>
<body>
    <div class="container">

    <?php 

    $mes = array("enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"); 
    $mesactual = intval(date("m")-1);
    echo "<br>Nos encontramos en el dia".date(" d ")." del mes ".$mes[$mesactual]." del anio".date(" y ");

    ?>    
    </div>
</body>
</html>
