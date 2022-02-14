<?php
    $heightError = "";
    $weightError = "";
    $heightValue = "";
    $weightValue = "";
    $bmi = "";
    $bmiIndicator = "";
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(empty($_POST['height'])){
            $heightError = 'Taille requise';
        }else if( empty($_POST['weight'])){
            $weightError = 'Poid requis';
        }else{
            $height = validation($_POST['height']);
            $weight = validation($_POST['weight']);
            $heightValue = $height;
            $weightValue = $weight;
            $bmi = ($weight / ($height * $height) * 10000);

            if($bmi< 16.5){
                $bmiIndicator = "Dénutrition";
            }else if($bmi > 16.5 && $bmi < 18.5){
                $bmiIndicator = "Maigreur";
            }elseif($bmi > 18.5 && $bmi < 25){
                $bmiIndicator = "Normal";
            }else{
                $bmiIndicator = "Erreur";
            }
        }
    }

    function validation($data){
        $data = trim($data);
        $data = htmlspecialchars($data);
        return $data;
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculer son IMC</title>
</head>
<body>
    <h1>Calculer son IMC</h1>
    <form method="post">
        <div>
            <label for="height">Votre taille (en centimètre)</label>
            <input type="number" name="height" id="height" value="<?= $heightValue ?>"placeholder="cm" required>
            <p><?= $heightError ?></p>
        </div>
        <div>
            <label for="weight">Votre poid (en Kilogramme)</label>
            <input type="number" name="weight" id="weight" value="<?= $weightValue ?>" placeholder="Kg" required>
            <p><?= $weightError ?></p>
        </div>
        <div>
            <label for="weight">Votre IMC</label>
            <input type="number" value="<?= $bmi ?>" disabled>
            <p><?= $bmiIndicator ?></p>
        </div>
        <input type="submit" value="Valider">
    </form>
</body>
</html>