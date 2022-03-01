<?php
    include_once 'connexionBdd.php';

    //----------------------U du CRUD--------------------------
    if(isset($_POST['updateTask'])){
        $title = $_POST['title'];
        $description = $_POST['description'];

        $id = $_GET['id'];

        $sqlU = "UPDATE `tasks` SET `title`=:title, `description`=:description WHERE `id`=:id";
        $request = $db->prepare($sqlU);
        $request->bindValue(":id", $id, PDO::PARAM_INT);
        $request->bindValue(":title", $title, PDO::PARAM_STR);
        $request->bindValue(":description", $description, PDO::PARAM_STR);
        $request->execute();

        header('location:index.php');
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editer une tache</title>
</head>
<body>
    <h1>Liste de tache</h1>
    <!-- formulaire -->
    <h2>Mettre à jour une tache</h2>
    <form method="post">
        <input type="text" name="title" value="<?= $_GET['title'] ?>">
        <textarea name="description"> <?= $_GET['description'] ?> </textarea>
        <button type="submit" name="updateTask">Ajouter</button>
    </form>
</body>
</html>