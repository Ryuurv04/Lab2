<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laboratorio 2.4</title>
</head>
<body>
    <?php
    //creacion de arreglos array("clave" => "valor")
    $personas=array("juan"=>"Panama", "john"=>"USA", "eica"=>"Finlandia", "kusanagi"=>"Japon");
    //recorrer todos los arreglos
    foreach($personas as $persona=>$pais){
        print "$persona es de $pais <br>";
    }
    //imprecion especifica
    echo "<br>". $personas["juan"];
    echo "<br>". $personas["eica"];

    ?>
</body>
</html>