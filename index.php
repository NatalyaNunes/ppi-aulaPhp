<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introdução PHP</title>
</head>
<body>
    <p>OI!!</p>
    <?= "Olá mundo !"; ?>
    <br>
    <?php
    
    $saldoEmBanco = 100;
    $saque = 25;
    //$saque = $_GET["valor"];
    $saldoAtual = $saldoEmBanco - $saque;

    echo $saldoEmBanco>=$saque? "Saque realizado" : "Saldo insuficiente";
    echo "<br> Saldo atual: $saldoAtual";
    
    ?>
    <hr>
    <form action="index.php">

        <div>
            <label for="txtSacar">Valor que deseja sacar:</label>
            <input type="text" name="valor" id="txtSacar">
        </div>
        <div>
            <label for="txtParagrafo">Qtd. de paragráfos:</label>
            <input type="text" name="par" id="txtParagrafo">
        </div>
        <input type="submit" value="Sacar">
    </form>

<?php
    $p = $_GET["par"];
    for($c = 0; $c < $p; $c++){
        echo "<p>$c</p>";
    };

?>

</body>
</html>