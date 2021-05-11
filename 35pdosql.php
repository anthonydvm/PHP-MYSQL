<?php
    include_once 'includes/db.php';
    include_once 'includes/survey.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/35style.css">
</head>
<body>
    
    <form action="#" method="post">
        <?php
            $survey = new Survey();
            if(isset($_POST['lenguaje'])){
                $survey->setOptionSelected($_POST['lenguaje']);
                $survey->vote();
            }
        ?>
        <h2>¿Cuál es tu lenguaje de programación favorito</h2>
        
        <input type="radio" name="lenguaje" id="" value="c">C<br>
        <input type="radio" name="lenguaje" id="" value="c++">C++<br>
        <input type="radio" name="lenguaje" id="" value="java">Java<br>
        <input type="radio" name="lenguaje" id="" value="swift">Swift<br>
        <input type="radio" name="lenguaje" id="" value="python">Python<br>

        <input type="submit" value="Votar!">
    </form>

</body>
</html>