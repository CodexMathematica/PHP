<?php
    //var_dump($_GET); die; Afficher le contenu de la super globale $_GET et stopper l'execution 
    if( isset($_GET['name']) && isset($_GET['adjective']) && isset($_GET['course']) && isset($_GET['signature']) && !empty($_GET['name']) && !empty($_GET['adjective']) && !empty($_GET['course']) && !empty($_GET['signature'])){ 
        $name= $_GET['name']; // Stock la valeur de l'input name passer en parametre d'URL
        $adjective = $_GET['adjective'];
        $course = $_GET["course"];
        $signature = $_GET["signature"];
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Générateur de mots d'excuse</title>
</head>
<body>
    
    <form method="get"> <!-- La methode indique comment les données vont être envoyées -->

        <label for="name">Nom</label>
        <input type="text" id="name" name="name" required> <!-- L'attribut name permet de récupérer la valeur de l'input -->
        <label for="adjective">Adjectif</label>
        <input type="text" id="adjective" name="adjective" required>
        <label for="course">Cours</label>
        <input type="text" id="course" name="course" required>
        <label for="signature">Signature</label>
        <input type="text" id="signature" name="signature" required>
        <input type="submit" onclick='' value="Soumettre">
    </form>

    <?php if(isset($_GET['name']) && isset($_GET['adjective']) && isset($_GET['course']) && isset($_GET['signature']) && !empty($_GET['name']) && !empty($_GET['adjective']) && !empty($_GET['course']) && !empty($_GET['signature'])) { ?>
        <p>Veuillez excuser <?= $name ?> qui est bien trop <?= $adjective ?> pour participer au cours de <?= $course ?></p>
        <p>Signé <?php echo $signature ?></p>
    <?php } ?>

</body>
</html>