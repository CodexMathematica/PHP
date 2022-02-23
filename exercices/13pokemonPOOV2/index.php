<?php
include 'battle.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L'arene</title>
    <link rel="stylesheet" href="assets/style.css">
    <script defer src="assets/app.js"></script>
</head>
<body>
    <header>
        <h1>Arene Pokemon V2</h1>
    </header>
    <main>
        <?php if(!isset($myPokemon) && !isset($ennemy)){ ?>
            <section class="create">
                <h2>Créer son Pokemon</h2>
                <form method="post" id="form">
                    <p id="error" class="error"></p>
                    <input type="text" name="name" id="name" placeholder="Nom" required>
                    <select name="type" id="type" required>
                        <option value="water">Eau</option>
                        <option value="fire">Feu</option>
                    </select>
                    <input type="number" name="hp" id="hp" min="0" max="21" placeholder="points de vie" required>
                    <input class="btn" type="submit" name="submit" value="Soumettre">
                </form>
            </section>
        <?php }elseif(isset($myPokemon) && isset($ennemy)){ ?>
            <section class="battle">
            <h2>L'affrontement</h2>
            <?= '<p class="hero">' . $myPokemon->presentation() . '</p>' ?>
            <?= '<p class="ennemy">' . $ennemy->presentation() . '</p>' ?>

            <?php
                $count = 1;
                do{ 
                    echo '<h2> Round' . $count . '</h2>';
                    $myPokemon->updateHealth($ennemy->attack());
                    $ennemy->updateHealth($myPokemon->attack());
                    $count += 1;
                }while($myPokemon->getHp() > 0 && $ennemy->getHp() > 0); 
                ?>
                <p class="result">
                    <?php
                        if($myPokemon->getHp() > 0){
                            echo $myPokemon->getName() . ' gagne ce combat';
                        }elseif($ennemy->getHp() > 0){
                            echo $ennemy->getName() . ' gagne ce combat';
                        }else{
                            echo 'Aucun vainqueur.';
                        }
                    ?>
                </p>
                <button class="btn" id="restart" type="submit">Recréer un pokemon</button>
                <button class="btn" id="nextBattle" type="submit">Combat suivant</button>
            </section>
        <?php }else{ ?>
            <p>Erreur veuillez contacter une administrateur</p>
        <?php } ?>
    </main>
    <footer>
            <p class="footer">Apprendre la POO avec PHP7.4 - 2022</p>
    </footer>
</body>
</html>