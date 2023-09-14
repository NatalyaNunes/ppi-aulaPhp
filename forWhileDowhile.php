<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    

<ol>
    <?php

    $n = $_GET["qtd"];

    echo "<h1>Crie n itens na tela com FOR</h1>";
    for($i = 1; $i <= $n; $i++){
        echo "<li>";
        echo"   <label>Animal $i</label> <br>
                <input type='text'>";
        echo "</li>";
    };

    echo "<h1>Crie n itens na tela com WHILE</h1>";
    $c = 1;
    while($c <= $n){
        echo "<li>";
        echo "  <label>Animal $c</label> <br>
                <input type='text'>";
        echo "</li>"; 
        $c++;
    };

    echo "<h1>Crie n itens na tela com DOWHILE</h1>";
    $x = 1;
    do{ ?>
        <li>
            <label for="animal<?=$x;?>">Animal <?=$x; ?> </label> <br>
            <input type='text' id="animal<?=$x;?>" name="animal<?=$x;?>">
        </li> 
        
       <?php $x++;
    }while($x <= $n);

    ?>
</ol>
    
</body>
</html>