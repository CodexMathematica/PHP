<!-- BDD MySQL installée en même temps que Wamp64 -->

<!-- On crée une BDD users contenant 4 champs -->

<!-- Connection à la BDD (On utilise PDO car universel. Mysqli est uniquement lié au BDD mysql) -->

<?php
// --------------------Connexion PDO----------------------
//Constantes
define('DBHOST', 'localhost');
define('DBNAME','demo_php_crud');
define('DBUSER','root');
define('DBPASS', '');

//DSN de connexion (dsn = data source name)
$dsn = "mysql:dbname=" . DBNAME . ";host=" . DBHOST;

//Assurer la connexion
try{
    $db = new PDO($dsn, DBUSER, DBPASS); // On instancie la classe PDO
    echo 'Connexion établie avec succée.';
    $db->exec("SET NAMES utf8"); //ON s'assure d'envoyer les données avec l'encodage utf8
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); // Parametrage du fetch par défaut
}catch(PDOException $e){
    die("Erreur : " . $e->getMessage()); //Affiche un message d'erreur si echec de la connexion
}

// ---------------CRUD avec requetes préparées et nommées --------------------------------
// Les requetes préparées protéges des injections SQL

//-------R(read)--------------------
//Afficher l'utilisateur avec l'id = 1 (nb: Si plusieur champs on récupére un tableau que l'on affiche avec une boucle foreach)
$sqlR = "SELECT * FROM `users` WHERE `id`=:id"; //Requete en sql avec :id qui est un paramétre nommé
$request = $db->prepare($sqlR); // On prépare la requete
$request->bindValue(":id", 1, PDO::PARAM_INT);
$request->execute(); //On execute la requete
$user = $request->fetchAll();
// On affiche
echo '<pre>';
var_dump($user);
echo '</pre>';

//-------C(create)---------------
$sqlC = "INSERT INTO `users`(`id`, `email`, `password`, `roles`) VALUES (:id, :email, :pass, :roles) ";
// Même code que pour R mais sans le fetchAll() de la ligne 37

//-------U(update)---------------
$sqlU = "UPDATE `users` SET `email`=:email,`password`=:pass,`roles`=:roles WHERE id = :id";
// Même code que pour R mais sans le fetchAll() de la ligne 37

//-------D(delete)---------------
$sqlD = "DELETE FROM `users` WHERE id = :id";
// Même code que pour R mais sans le fetchAll() de la ligne 37

// Voir exercice todolist

?>