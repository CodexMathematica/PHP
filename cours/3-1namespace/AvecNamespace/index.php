<?php

use App\Contact\Security as ConSecu; // L'alias 'as ConSecu' n'est pas obligatoire
use App\Login\Security as LoggedIn;

require_once 'payment/Security.php'; // Necessaire si pas d'autoloader
require_once 'contact/Security.php'; // Necessaire si pas d'autoloader
require_once 'login/Security.php'; // Necessaire si pas d'autoloader
require_once 'login/Customer.php'; // Necessaire si pas d'autoloader

echo '<br>-------------namespace personnaliser et namespace global----------------<br><br>';
// Les namespaces sont comme un systéme de rangement de fichier qui permet de classer nos éléments pour les retrouver plus facilement et éviter les confusions lorsqu'ils ont le même nom.
// Très utilses pour les gros projets ou les projets qui s'appuyent sur des dépendances sans rapport les unes avec les autres (donc risque de même nom de classe)

var_dump(new App\Payment\Security()); // Par défaut PHP cherche dans le namespace  qui est \ (ex: \Datetime())

echo '<br>-------------use et alias----------------<br><br>';

var_dump(new ConSecu()); //Fonctionne grâce au use de la ligne 3

echo '<br>-------------Depuis le même namespace----------------<br><br>';

$jack = new LoggedIn();
$jack->forWho();
