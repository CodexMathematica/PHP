<?php

    include_once 'connexionBdd.php';

    if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = $_GET['id'];
        // ----------------R du CRUD----------------------
        $sqlR = "SELECT * FROM `tasks` WHERE `id`=:id"; // Requete en sql
        $request = $db->prepare($sqlR); // On prépare la requete
        $request->bindValue(":id", $id, PDO::PARAM_INT);
        $request->execute(); // On execute la requête
        $task = $request->fetch(); //pas de fectchAll cor on ne renvoie pas un tableau mais un seul enregistrement

        if(!$task){
            header('location:index.php');
        }

    }else{
        header('location:index.php');
    }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détail d'une tache</title>
</head>
<body>
    <h1>Détail d'une tache</h1>
    <table>
        <thead>
            <tr>
                <th>Identifiant</th>
                <th>Titre</th>
                <th>Date</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td><?= $task['id'] ?></td>
                    <td><?= $task['date'] ?></td>
                    <td><?= $task['title'] ?></td>
                    <td><?= $task['description'] ?></td>
                    <td>
                        <a href="update.php?id=<?= $task['id'] ?>&title=<?= $task['title'] ?>&description=<?= $task['description'] ?>">Modifier</a>
                        <a href="delete.php?id=<?= $task['id'] ?>">Supprimer</a>
                    </td>
                </tr>
        </tbody>
    </table>
    <a href="index.php">Retour à l'accueil</a>
</body>
</html>