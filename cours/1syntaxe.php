<!-- On utilise l'extension de fichier .php -->
<!-- On peut écrire du HTML dns un fichier PHP -->
<!-- Pour écrire du PHP on utilise la balise <?php ?> -->

<!-- Ecrire en passant par PHP -->
<?php echo 'Hello World'; ?>  <!--Affiche du texte-->
<?php
    echo '<br>'; // Interprete les balises HTML
    echo '<button>Boutton</button>';
?>
<?= 'Bonjour' ?>

<!-- Commentaires -->
<?php
// Sur une ligne
# Sur une ligne
/* 
Plusieurs
lignes
*/
?>

<!-- Aparté sur les Cases Styles (la casse) -->
<!-- camelCase, PascalCase, snake_case, kebab-case -->

<!-- En PHP les instructions se terminent toujours par le symbole ; -->


<!-- Les variables -->
<?php

// Qu'est ce qu'une variable : Boite qui contient une valeur
$name = 'J'; // Déclaration sans typage (=variable dynamique) et initialisation à la vvaleur 'J'
$age = 21;
$isAlive = true;
$height = 1.95;
$power = null;
(bool) $typage = true; //Pour donner un type à une variable.

/* Les Types
String
Integer =>int
Float/ Double
Boolean => bool
Null
Array
Object
Ressource
*/

echo '<br> Je m\'appel ' . $name; // Concaténation avec le . (\ est un caractére d'echapement)

//Obtenir le type d'une variable
echo '<br>' . gettype($age) . '<br>';
var_dump($age, $isAlive);

//Changer la valeur d'une variable
$name = 'JD'; // Il suffit de la redéfinir

//Fonctions qui verifie le contenu d'une variable
echo '<br> <br>'; 
echo var_dump(is_string($age)); // Retourne false
echo '<br> <br>'; 
echo var_dump(is_int($age)); // Retourne true
is_bool($age);
is_double($age);
is_float($age);

// Fonction qui verifie si une variable est defini (variable qui n'est pas null)
isset($name); //true
isset($nuckname); //false

//Constantes
define('LASTNAME', 'Nom de famille'); 
echo LASTNAME;

?>
