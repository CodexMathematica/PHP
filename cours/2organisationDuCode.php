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