<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categoria dos atletas</title>
</head>
<body>

    <?php
    echo "Categorias dos atletas por idade <br>";
    $idade = $_GET["age"];

    ?> 

    <form action="aula3.php" method="get">
        <input type="text" name="age" id="">
        <input type="submit" value="Ver categoria">
    </form>

    <?php

    if($idade >= 12 && $idade <= 13){
        echo "Atleta da categoria mirim";
    }
    elseif($idade == 14) {
        echo "Atleta da categoria infantil";
    }
    elseif ($idade == 15) {
        echo "Atleta pode estar na categoria infantil e infanto-juvenil";    
    }
    elseif ($idade == 16) {
        echo "Atleta da categoria infanto-juvenil";          
    }
    elseif ($idade >= 17 && $idade <= 18) {
        echo "Atleta pode estar na categoria juvenil e júnior";           
    }
    elseif ($idade == 19) {
        echo "Atleta da categoria juvenil";          
    }
    elseif ($idade == 20) {
        echo "Atleta da categoria júnior e sênior";          
    }
    elseif ($idade > 20){
        echo "Atleta da categoria sênior";
    }
    elseif($idade == 0){

    }
    else{
        echo"Não se enquadra nas categorias";
    }
    ?>

</body>
</html>