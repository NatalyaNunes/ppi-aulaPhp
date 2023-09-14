<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>O semáforo indica:</h1>
    <?php
    
    $cor = strtolower($_GET["corS"]);

    if($cor == "verde" ){
        echo "Avance";
    }elseif ($cor == "amarelo") {
        echo "Atenção";
    }elseif ($cor == "vermelho") {
        echo "Pare";
    }else{
        echo "Cor inválida";
    };

   
    ?>
    <br>
    <?php
     $acao = "Cor inválida";
    if($cor == "verde" ){
        $acao = "Avance";
    }if ($cor == "amarelo") {
        $acao = "Atenção";
    }if ($cor == "vermelho") {
        $acao = "Pare";
    };
        echo "Ação: $acao";
    ?>
</body>
</html>