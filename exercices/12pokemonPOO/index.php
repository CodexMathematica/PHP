<?php
include 'pokemon.php';
include 'battle.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L'arene</title>
</head>
<body>
    <?php if(!isset($myPokemon) && !isset($ennemy)){ ?>
        <h1>Bienvenu dans l'Arene</h1>
        <section class="create">
            <form method="post">
                <input type="text" name="name" id="name">
                <select name="type" id="type">
                    <option disabled value="">Choisir un type</option>
                    <option value="electrique">Electrique</option>
                    <option value="eau">Eau</option>
                    <option value="feu">Feu</option>
                </select>
                <input type="number" name="hp" id="hp">
                <input type="submit" name="submit" value="Soumettre">
            </form>
        </section>
    <?php } ?>
</body>
</html>