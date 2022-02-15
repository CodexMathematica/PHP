<!-- Organisation du code en plusieurs fichiers -->
<!-- Le but est de rester DRY (don't repeat yourself) -->

<!-- Extraire le code répéter dans un fichier PHP que l'on inclue dans un autre fichier avec : -->

<?php

include 'chemin-du-fichier-a-inclure.php'; // Renvoie une erreur mais il continu la lecture du code
require 'chemin-du-fichier-a-inclure.php'; // Renvoie une erreur fatale et il arrete l'execution du code

include_once 'chemin-du-fichier-a-inclure.php'; //Si déjà inclu une fois le fichier n'est pas réinclu
require_once 'chemin-du-fichier-a-inclure.php'; //Si déjà inclu une fois le fichier n'est pas réinclu
?>

<!-- Aparté sur les chemins
    Chemin relatif : partial/file.php part du dossier actuel
    Chemin absolu : /partial/file.php part de la racine du projet
    ../../file.php permet de remonter 2 fois dans l'arborescence depuis le dossier ou l'on est
-->

<!-- Travailler avec le systéme de fichier (https://www.php.net/manual/en/book.filesystem.php) -->

<?php

// Constante magique (constante déclaré automatiquement et qui change selon le contexte du programme)
echo __DIR__ . '<br>'; // Affiche le chemin du dossier ou l'on est
echo __FILE__ . '<br>'; // Affiche le chemin du fichier
echo __LINE__ . '<br>'; // Affiche à quelle ligne se trouve cette ligne dans la page html

// Créer un dossier
//mkdir('test');

// Renomer un dossier
//rename('test', 'test2'); Renomme test en test2

// Supprmier un dossier
//rmdir('test2');

// Lire des fichiers et dossiers dans un dossier
//$files = scandir('./');
//echo '<pre>';
//var_dump($files);
//echo '</pre>';

// file_get_contents, file_put_contents (necessite un fichier lorem.txt contenant du texte)
$lorem = file_get_contents('lorem.txt'); //Stock le contenu textuelle du fichier dans une variable
echo $lorem;
echo '<br>';
file_put_contents('lorem.txt', "Ajoute cette ligne de texte au debut du fichier lorem.txt" . PHP_EOL . $lorem);

// file_get_contents depuis une URL (Depuis un fichier distant)
$jsonContent = file_get_contents('https://jsonplaceholder.typicode.com/users');
$users = json_decode($jsonContent);
var_dump($users);

// Verifier si un fichier existe
file_exists('lorem.txt'); // false

// Obtenir la taille du fichier
filesize('lorem.txt');

// Supprimer un fichier (Supprimer une image par exemple)
unlink('lorem.txt');