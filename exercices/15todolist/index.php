<?php
    //Connexion à la base de donnée
    include_once 'connexionBdd.php';

    //--------C du CRUD------------------------------------
    if(isset($_POST['addTask'])) {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $date = date('Y-m-d H:i:s');

        $sqlC = "INSERT INTO `tasks`(`title`, `date`, `description`) VALUES (:title, '$date', :description)"; //Requete en sql
        $request = $db->prepare($sqlC); // On prépare la requete
        $request->bindValue(":title", $title, PDO::PARAM_STR); 
        $request->bindValue(":description", $description, PDO::PARAM_STR); // On associé la valeur au paramétre nommé
        $request->execute(); // On execute la requête
    }

    // ----------------R du CRUD----------------------
    $sqlR = "SELECT * FROM `tasks`"; // Requete en sql
    $request = $db->prepare($sqlR); // On prépare la requete
    $request->execute(); // On execute la requête
    $tasks = $request->fetchAll(); // Retourne un tableau
?>

<!DOCTYPE html>
<html lang="efr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>todolist</title>
</head>
<body>
    <h1>Liste de tache</h1>
<!-- Formulaire -->
    <h2>Ajouter une chose a faire</h2>
    <form method="post">
        <input type="text" name="title">
        <textarea name="description"></textarea>
        <button type="submit" name="addTask">Ajouter</button>
    </form>
<!-- Liste des taches -->
    <h2>Liste des choses à faire</h2>
    
    <table>
        <thead>
            <tr>
                <th>Identifiant</th>
                <th>Titre</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($tasks as $task) { // On boucle sur le tableau tasks reçus de la BDD qui contient chaque tache todo
            ?>
                <tr>
                    <td><?= $task['id'] ?></td>
                    <td><?= $task['title'] ?></td>
                    <td><?= $task['description'] ?></td>
                    <td>
                        <a href="detail.php?id=<?= $task['id'] ?>">Details</a>
                        <a href="delete.php?id=<?= $task['id'] ?>">Supprimer</a>
                    </td>
                </tr>
            <?php
                }
            ?>
        </tbody>
    </table>

</body>
</html>