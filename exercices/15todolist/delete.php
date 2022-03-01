<?php
//Est ce que l'id est envoyé comme parametre d'URL?
if(isset($_GET['id']) && !empty($_GET['id'])){ //si

    //Connexion à la base de donnée
    include_once 'connexionBdd.php';

    $id = strip_tags($_GET['id']); // protége l'id

    // Supprimer la tache
    $sqlD = "DELETE FROM `tasks` WHERE `id`=:id"; //Requete en sql avec :id qui est un parametre nommé
    $request = $db->prepare($sqlD);
    $request->bindValue(":id", $id, PDO::PARAM_INT);
    $request->execute();

    header('location: index.php'); // renvoie vers la page index.php

}else{
    header('location: index.php');
}