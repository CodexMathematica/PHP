<?php
    //var_dump($_GET); die; Afficher le contenu de la super globale $_GET et stopper l'execution  
    $name= $_GET['name']; // Stock la valeur de l'input name passer en parametre d'URL
    $adjective = $_GET['adjective'];
    $course = $_GET["course"];
    $signature = $_GET["signature"];
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
        <input type="text" id="name" name="name"> <!-- L'attribut name permet de récupérer la valeur de l'input -->
        <label for="adjective">Adjectif</label>
        <input type="text" id="adjective" name="adjective">
        <label for="course">Cours</label>
        <input type="text" id="course" name="course">
        <label for="signature">Signature</label>
        <input type="text" id="signature" name="signature">
        <input type="submit" value="Soumettre">
    </form>


</body>
</html>