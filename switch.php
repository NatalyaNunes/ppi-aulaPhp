<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Dia da semana</h1>
    <?php
    
    //switch case
    $day = $_GET["weekDay"];
    
    switch($day){
        case 1: 
            echo "Sunday";
            break;
        case 2: 
            echo "Monday";
            break;
        case 3: 
            echo "Tuesday";
            break;
        case 4:
            echo "Wandinha";
            break;
        case 5: 
            echo "Thursday";
            break;
        case 6: 
            echo "Friday";
            break;
        case 7: 
            echo "Saturday";
            break;
        default:
            echo "Dia inválido";
    };

    ?>
</body>
</html>