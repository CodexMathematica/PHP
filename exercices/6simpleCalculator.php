<?php
    if(isset($_GET['op'])){
        $x = $_GET['num1'];
        $y = $_GET['num2'];
        $op = $_GET['op'];
        $result;

        if(is_numeric($x) && is_numeric($y)){
            switch($op){
                case 'addition' :
                    $result = $x + $y;
                    break;
                case 'soustraction' :
                    $result = $x - $y;
                    break;
                case 'multiplication' :
                    $result = $x * $y;
                    break;
                case 'division' :
                    if($y != 0) $result = $x / $y;
                    break;
                default :
                    $result ='0';
            }
        }else{
            $result = '0';
        }
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice simple</title>
</head>
<body>
    <h1>Calculatrice</h1>
    <form method="get">
        <div>
            <label for="num1">Premier nombre</label>
            <input type="number" name="num1" value="<?=$x ?>" id="num1" required>
        </div>
        <div>
            <label for="num2">Second Nombre</label>
            <input type="number" name="num2" value="<?=$y ?>" id="num2" required>
        </div>
        <?php if(isset($result) && is_numeric($result)){ ?>
            <div>
                <label for="result">Resultat</label>
                <input type="text" id="result" value="<?= $result ?>" disabled>
            </div>
        <?php } ?>
    <div>
        <input type="submit" value="addition" name="op">
        <input type="submit" value="soustraction" name="op">
        <input type="submit" value="multiplication" name="op">
        <input type="submit" value="division" name="op">
    </div>

    </form>
</body>
</html>