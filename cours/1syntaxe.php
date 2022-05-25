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
$name = 'J'; // Déclaration sans typage (=variable dynamique) et initialisation à la valeur 'J'
$age = 21;
$isAlive = true;
$height = 1.95;
$power = null;

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

<!-- Les nombres (https://www.php.net/manual/en/ref.math.php) -->

<?php

    //Déclarer des nombres
    $a = 5; //Integer
    $b = 4.5; //Float
    $c = $a + $b;

    //Operations arithmetiques
    /*
    +
    -
    *
    /
    %
    */

    echo '<br>' . ($a + $b * $b / 4.5) . '</br>'; //Priorité des opérations respectée
    echo ($a % 2); // Retourne le reste de la division (utile pour savoir si un nombre est multiple d'un autre)

    //Opérateurs d'assignations
    /*
    =
    +=
    -=
    *=
    /=
    %=
    */
    $a += $b; // (equivalent à $a = $a + $b;)
    echo '<br>' . $a;

    // Opérateurs d'incrémentation et décrementation
    /*
    ++
    --
    */
    echo '<br>' . $a++; // Fait le echo puis on incremente
    echo '<br>' . ++$a; // Fait l'incrementation et fait le echo

    //Fonctions de verification concernant les nombres
    is_double($a);
    is_float(1.25);
    is_int(1); is_integer(1); // Ce sont les même fonctions
    is_numeric("4.5"); // Verifie si un string peut être convertie en nombre; retourne true;

    // Conversion (caster)
    $strInteger = "33";
    $Integer = (int)$strInteger; // Caster
    $Integer = intval($strInteger); // Via une fonction
    echo '<br> Ceci est une conversion : ' . gettype($Integer) . '<br>';

    // Fonctions utilisables sur les nombres (arrondir, puissance, absolue, troncature ...)
    echo "abs(-15) " . abs(-15) . '<br>';
    echo "pow(2,  3) " . pow(2, 3) . '<br>'; //pow(base, exposant)
    echo "sqrt(16) " . sqrt(16) . '<br>'; // Racine carrée
    echo "max(2, 7, 4, 3) " . max(2, 7, 4, 3) . '<br>';
    echo "min(2, 3) " . min(2, 3) . '<br>';
    echo "round(2.4) " . round(2.4) . '<br>'; //arrondie
    echo "round(2.6) " . round(2.6) . '<br>'; //arrondie
    echo "floor(2.6) " . floor(2.6) . '<br>'; // Arrondie toujours à l'inférieur
    echo "ceil(2.4) " . ceil(2.4) . '<br>'; // Arrondie toujours au supérieur

    // Formatter un nombre
    $number = 123456789.12345;
    echo number_format($number, 2, ',', ' ') . '<br>'; //number_format(variable, nombreDeChiffreApresVirgule, 'separateurDecimal', 'separateurDesMilliers')

?>
<br> <br>

<!-- Les chaines de caractéres (https://www.php.net/manual/en/ref.strings.php) -->

<?php
    // Déclarer et initialiser une variable de type string
    $greeting = 'Bonjour';
    // Concaténation et affichage
    echo $greeting . ', <br>' . $name; //Afficher du texte
    echo "$greeting, <br> $name"; // "" Gére l'interpétration des variables

    //Fontctions en lien avec les strings
    $string = "    Hello World      ";
    echo '<br>'; // PHP_EOL correspond à un retour chariot (\n)
    echo "1 - " . strlen($string) . '<br>' . PHP_EOL; //Taille de la chaine de caractere (length)
    // HTML ignore les espaces avant et aprés une chaine à l'affichage mais ce n'est pas le cas lorsque l'on stock dans des variables PHP
    echo '2 - ' . trim($string) . '<br>' . PHP_EOL; // Enleve les espaces avant et aprés le premier et dernier caractére de la chaine
    echo '3 - ' . ltrim($string) . '<br>' . PHP_EOL; // Enleve les espaces avant le premier caractére de la chaine(l = left)
    echo '4 - ' . rtrim($string) . '<br>' . PHP_EOL; // Enleve les espaces aprés le dernier caractére de la chaine (r = right)
    echo '5 - ' . str_word_count($string) . '<br>' . PHP_EOL; // Compte le nombre de mot
    echo '6 - ' . strrev($string) . '<br>' . PHP_EOL; // Inverse l'ordre des lettres
    echo '7 - ' . strtoupper($string) . '<br>' . PHP_EOL; // Passe toutes les caractéres en majuscule
    echo '8 - ' . strtolower($string) . '<br>' . PHP_EOL; // Passe toutes les caractéres en minuscule
    echo '9 - ' . ucfirst('hello') . '<br>' . PHP_EOL; // Passe le premier caractéres en majuscule
    echo '10 - ' . lcfirst('HELLO') . '<br>' . PHP_EOL; // Passe le premier caractéres en minuscule
    echo '11 - ' . ucwords('hello world') . '<br>' . PHP_EOL; // Passe le premier caractéres de chaque mot en majuscule
    echo '12 - ' . strpos($string, 'world') . '<br>' . PHP_EOL; // Renvoie la position du premier caractére si il trouve la séquence world dans la variable (World)
    echo '13 - ' . stripos($string, 'world') . '<br>' . PHP_EOL; // Comme strpos mais insensible à la casse.
    echo '14 - ' . substr($string, 8) . '<br>' . PHP_EOL; // Extrait une chaine de caractére (8 correspond au debut de la position à extraire et il va jusqu'a la fin)
    echo '15 - ' . str_replace('World', 'PHP', $string) . '<br>' . PHP_EOL; // Remplace une chaine par une autre
    echo '16 - ' . str_ireplace('world', 'PHP', $string) . '<br>' . PHP_EOL; // ... insensible à la casse

    // Ecrire sur plusieurs ligne et gestion des sauts de lignes
    $longText = "Bonjour,
        Je veux <b>écrire</b> sur ...
        plusieurs lignes.";
    echo '1 - ' . $longText . '<br>';
    echo '2 - ' . nl2br($longText) . '<br>'; // Respect les espaces et saut de ligne
    echo '3 - ' . htmlentities($longText) . '<br>' . PHP_EOL; // Protége de l'injection html
    echo '4 - ' . nl2br(htmlentities($longText)) . '<br>' . PHP_EOL;
    echo '5 - ' . html_entity_decode(htmlentities($longText)) . '<br>' . PHP_EOL; // Repere les balises html dans un texte et les appliquent à la page
    echo '6 - ' . htmlspecialchars($longText) . '<br>' . PHP_EOL;

?>

<br> <br>

<!-- Les tableaux : array (https://www.php.net/manual/en/ref.array.php) -->

<?php
// Déclarer et initialiser un tableaux
$fruits = array(); //ANcienne façon de déclarer un tableau
$animals = ['Dog', 'Cat', 'Bird'];

//Afficher un tableau dans le navigateur
var_dump($animals); // Pas tres lisible on utilise les balises pre pour ameliorer l'affichage
echo '<pre>';
var_dump($animals);
echo '</pre>';

// Extraire un element via son index
echo $animals[0]; // Attention l'index commence à 0

// Ajouter un element via son index
$animals[3] = 'Monkey';

// Verifier si le tableau contient un elemet à un index donné
isset($animals[1]); //True

// Taille du tableau
echo '<br>La taille du talbeau est de : ' . count($animals);

//Ajouter un elts à la fin
$animals[] = 'Fish';
array_push($animals, 'Snake'); //Ajout via un fonction

//Supprimer un elts à la fin du tableau
array_pop($animals);

//Ajouter un elts au debut du tableau
array_unshift($fruits, 'Apple');

// Supprimer un element au debut du tableau
array_shift($fruits);

// Transformer une chaine de caractere en tableau
$food = 'Milk, Chocolate, Vegetable';
$foods = explode(",", $food);
echo '<br>';
var_dump($foods);

//Transformer un tableau en chaine de caractere
$ingredient = implode(", ", $foods);
echo '<br>';
var_dump($ingredient);

// Vérifier si un elt existe dans un tableau
echo '<br>';
var_dump(in_array('Spider', $animals)); // Retourne false

// Obtenir l'index d'un elts dans un tableau
echo '<br>';
var_dump(array_search('Dog', $animals));

// FUsionner 2 tableaux
$arrayMerge = array_merge($animals, $foods);
echo '<br> Fusion : ';
var_dump($arrayMerge);

// Filtrer par ordre alphabetique (ou ordre numerique avec des nombres)
sort($arrayMerge); //rsort() pour avoir dans l'ordre inverse
echo '<pre>';
var_dump($arrayMerge);
echo '<pre>';

?>

<!-- Tableaux associatifs -->

<?php 

// Créer un tableau associatif (tableau clefs=>valeur)
$pets = [
    'nb-species' => 48800,
    'class' => 'Arachnida',
    'subphylum' => 'Arthropoda',
    'predators' => ['Wasp', 'Reptile']
];

echo '<pre>';
print_r($pets); // ou var_dump();
echo '</pre>';

//Obtenir un element par sa clef
echo $pets['class'] . '<br>';

// Changer un elts par sa clef
$pets['subphylum'] = 'Chelicerata';

// Operateur de coalescence null
if (!isset($pets['phylum'])){
    $pets['phylum'] = 'Arthropoda';
}

$pets['phylum'] ??= 'Arthropoda'; // (depuis php 7.4) (?? verifie si la valeur est "set")
echo 'Phylum : ' . $pets['phylum'];

// Vérifier si le tableau à une clef spécifique
echo '<pre>';
var_dump(isset($pets['nb-species']));  // Tester en modifiant par 'localization'
echo '</pre>';

// Afficher les clefs
echo '<pre>';
var_dump(array_keys($pets));
echo '</pre>';

// Afficher les valeurs
echo '<pre>';
var_dump(array_values($pets));
echo '</pre>';

// Trier un tableau associatif par valeur et par clef
ksort($pets); // ksort, krsort, asort, arsort
echo '<pre>';
var_dump($pets);
echo '</pre>';

?>

<!-- Tableaux multi-dimensionnels -->

<?php

//Declarer un tableau multi-dimensionels

$todos = [
    ['title' => 'faire le ménage', 'isCompleted' => false],
    ['title' => 'faire les courses', 'isCompleted' => false],
    ['title' => 'Laver la voiture', 'isCompleted' => true],
];

echo '<pre>';
var_dump($todos);
echo '</pre>';

// Afficher la valeur d'une autre dimension
var_dump($todos[1]['isCompleted']);

?>

<!-- Les conditions (if elseif else et switch) -->

<?php

$age = 20;
$salary = 30000;

// La condition if
if ($age == 20) {
    echo '1';
}

// Syntaxe spéciale : La condition if qui contient une seule instruction
if ($age == 20) echo "1";

// Comparaison de valeur : Différence entre == et ===
$age == 20; // true (Comparaison de valeurs)
$age == '20'; // true

$age === 20; // true (Comparaison de types et valeurs)
$age === '20'; // false

// La condition if-else
if ($age > 20) {
    echo 'Plus de 20 ans';
} else {
    echo 'Moins de 21 ans';
}

// Comparaison de valeur : ET (https://www.php.net/manual/en/language.operators.logical.php)
if ($age < 20 && $salary === 30000){
    echo 'ET Bravo';
}

// Comparaison de valeur : OU
if ($age < 20 || $salary === 30000){
    echo 'OU Bravo';
}

// Syntaxe spéciale : la ternaire
echo $age <22 ? 'Jeune' : 'Vieux';
echo '<br>';

// Syntaxe spéciale : La ternaire courte
$myage = $age?: 18; // Equivalent à $age ? $age : 18;

// Opérateur de coalescence null
$var = isset($name) ? $name : 'John'; // Si name est déclaré on stock le nom déclaré sinon on stock la valeur John
$var = $name ?? 'John'; // Identique à la ligne du dessus

// La condition switch
$userRole = 'admin';

switch ($userRole) {
    case 'admin':
        echo 'Le tout puissant admin. <br>'; // Une seule instruction
        break; // necessaire sinon le cas suivant sera executé
    case 'editor':
        echo 'Celui qui peut éditer l\'histoire. <br>';
        break;
    case 'user':
        echo 'Je suis un user. <br>';
        break;
    default:
    echo 'Role inconnu. <br>';
}

?>

<!-- Les boucles(while, do while, for, foreach) -->

<?php

// La boucle tant que : while
//while (true) { Boucle infini a ne surtout pas executer
    // instructions
//}

// La boucle tant que avec un compteur : while (Pour passer dans la boucle il faut que la condition soit vérifier)
$counter = 0;
while($counter < 10) {
    echo 'While ' . $counter . '<br>';
    $counter++;
}

// La boucle faire tant que : do while (On passe au moins une fois dans la boucle avant de vérifier la condition)
$counter = 0;

do {
    echo ' Do While ' . $counter . '<br>';
    $counter++;
} while ($counter < 10);

// La boucle pour : for
for ($i = 0; $i < 10; $i++) {
    echo 'For ' . $i . '<br>';
}

// La boucle pour chaque : foreach (Utile pour lire les tableaux)
$heroes = ['Nightwing', 'Batgirl', 'Superman', 'Catwoman'];
foreach ($heroes as $hero) {
    echo $hero . '<br>';
}

foreach ($heroes as $i => $hero) {
    echo $i . ' ' . $hero . '<br>';
}

// Iterer dans un tableau associatif

$person = [
    'firstname' => 'Bruce',
    'lastname' => 'Wayne',
    'surname' => 'Batman',
    'age' => 42,
    'hobbies' => ['Sciences', 'Sports']
];

foreach ($person as $key => $value) {
    if($key === 'hobbies') {
        break; // Empecher l'affichage des hobbies
    }
    echo $key . ' ' . $value . '<br>'; // Affiche la clef et la valeur associée
}

?>

<!-- Les fonctions -->

<?php
// Déclarer une fonction
function hello() {
    echo 'Hello Tim. <br>';
}

// Appeler une fonction
hello();

//Déclarer et appeler une fonction avec des arguments + typage
function hi(string $user): void {
    echo "Hi $user. <br>";
}

hi('Barbara');

function welcome($mrs, $mr){
    echo "Welcome Mrs $mrs and Mr $mr. <br>";
}

welcome('Kyle', 'Wayne');

function sum(int $a, int $b): int
{
    return $a + $b;
}

echo '<br> Je fais une addition : ' . sum(3, 2);

?>

<!-- Les dates -->

<?php 

// Afficher la date du jour
echo date('Y-m-d H:i:s') . '<br>';

// Afficher la date d'hier
echo date('Y-m-d H:i:s', time() - 60 * 60 * 24) . '<br>';

// Jouer avec les formats: https://www.php.net/manual/en/function.date.php
echo date('F j Y, H:i:s') . '<br>';

//Afficher le timestamp (Standard qui désigne le nombre de secondes écoulées depuis le 1er janvier 1970. Avantages et inconveniants : http://www.timestamp.fr/)
echo time() . '<br>';

// Parser (modifier) une date : https://www.php.net/manual/en/function.date-parse.php
$dateString = '2022-02-14 10:40:00';
$parsedDate = date_parse($dateString);
echo '<pre>';
var_dump($parsedDate);
echo '</pre>';
?>

<!-- Compléments -->
<br> <br> <br>
<?php
//1 Affectation par valeur et par référence
//Affectation par valeur (On duplique le contenu d'une variable dans un autre espace mémoire que l'on nomme)
$leNombre1 = 20;
$leNombre2 = $leNombre1;
var_dump($leNombre1);
var_dump($leNombre2);
$leNombre1 = 3;
var_dump($leNombre1);
var_dump($leNombre2);
//Affectation par référence (On donne un alias à une variable. La seconde variable pointe vers le même espace mémoire.)
$leNombre3 = 20;
$leNombre4 = &$leNombre3; // & en plus
var_dump($leNombre3);
var_dump($leNombre4);
$leNombre3 = 3;
var_dump($leNombre3);
var_dump($leNombre4);

//2 Portée des variables (locale vs globale)

function laPorteeDesVariables(){
    $portee = "local"; // Cette variable n'existe que dans la fonction
}

$portee = 'global'; // Variable globale différente de la variable déclarée dans la fonction precedente.

// Comment faire en sorte que les deux variables soit identiques ?
//Retourner la valeur dans la fonction

// function laPorteeDesVariables(){
//     $portee = "local"; // Cette variable n'existe que dans la fonction
//     return $portee;
// }

// $portee = laPorteeDesVariables(); On affecte la valeur du return dans la variable globale. 




?>
