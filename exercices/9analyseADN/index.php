<?php require('analyse.php') ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analyse ADN</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>   
    <main>
        <h1>Analyse d'acide nucleique exo-biologique</h1>
        <form method="post">
            <fieldset>
                <legend>Données patient</legend>
                <label for="patient">Nom: </label>
                <input type="text" id="patient" name="patient">
                <label for="male">Male: </label>
                <input type="radio" id="male" name="sex" value="male" checked>
                <label for="female">Femelle: </label>
                <input type="radio" id="female" name="sex" value="femelle">
            </fieldset>

            <fieldset>
                <legend>Données échantillon</legend>
                <label for="sampleId">Numéro de l'échantillon: </label>
                <input type="number" id="sampleId" name="sampleId" required>
                <label for="sample">Echantillon: </label>
                <input type="text" id="sample" name="sample" required>
            </fieldset>

            <button type="submit" name="dataSubmited">Soumettre</button>
        </form>
    </main>

    <section> 
        <h2>Données concernant de l'échantillon en cours d'analyse</h2>
        <h3>Données de l'utilisateur</h3>
        <?php if(isset($patient)){ echo '<p> Nom : ' . $patient . '</p>'; } ?>
        <?php if(isset($sampleId)){ echo '<p> Numéro échantillon : ' .$sampleId . '</p>'; } ?>
        <?php if(isset($sex)){ echo '<p> Sexe : ' . $sex . '</p>'; } ?>
        <h3>Données de l'analyse ADN</h3>
        <?php if(isset($ageSampleDetermination)){ echo '<p> Age : ' . $ageSampleDetermination . '</p>'; } ?>
        <?php if(isset($sexSampleDetermination )){ echo '<p> Sexe : ' . $sexSampleDetermination  . '</p>'; } ?>
        <?php if(isset($sexError )){ echo '<p class="text-error"> Taille : ' . $sexError  . '</p>'; } ?>
        <?php if(isset($heightSampleDetermination )){ echo '<p> Taille : ' . $heightSampleDetermination  . '</p>'; } ?>

    </section>
</body>
</html>