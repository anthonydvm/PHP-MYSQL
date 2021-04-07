<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{
        background:tomato;
        text-align: center;
    }
    </style>
</head>
<body>
    
    <?php 

    $frutas = array("manzana", "pera", "fresa");

    print_r($frutas);

    echo "<br>";

    echo $frutas[1];

    echo "<br>";

    echo count($frutas) . "elementos";

    echo "<br>";

    for($i = 0; $i < count($frutas); $i++ ){
        
        echo "<h1>$frutas[$i]</h1>";
    }

    $edades = array("Anthony" => 26, "John" => 22, "Ilay" => 1);
    
    print_r($edades);
    echo "<br>";
    echo $edades['Anthony'];
    echo "<br>";

    foreach($edades as $key => $value){
        echo $key . "tiene el valor de " . $value . "<br>";
    }
    ?>
    
</body>
</html>