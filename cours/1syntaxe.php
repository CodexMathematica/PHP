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

