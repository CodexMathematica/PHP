<!-- Les variables -->
<!-- Exercices -->
<?php

//1 Parmi les variables suivantes, lesquelles ont un nom valide : $a, $_a, $a_a, $AAA, $a!, $1a et $a1 ?

//2 Modifier le code ci-dessous pour calculer la moyenne des notes.
    $note_maths = 15;
    $note_francais = 12;
    $note_histoire_geo = 9;
    $moyenne = 0;
    echo 'La moyenne est de '.$moyenne.' / 20.'; //Résultat actuel : La moyenne est de 0 / 20.

//3 Calculer le prix TTC du produit.
    $prix_ht = 50;
    $tva = 20;
    $prix_ttc = 0;
    echo 'Le prix TTC du produit est de '.$prix_ttc.' €.';

//4 Créer 2 variables x et y. Ajouter leur valeur et multiplier le résultat par 5. Assigner la valeur obtenu à la variable z.
?>

<!-- Réponses -->

<?php

//1 Seules les variables $a, $_a, $a_a, $AAA et $a1 ont un nom valide en PHP. 
//$1a n'est pas un nom de variable valide car il commence par un chiffre, 
//tandis que $a! est également incorrect car il contient un caractère interdit.

//2
$note_maths = 15;   
$note_francais = 12;
$note_histoire_geo = 9;
$moyenne = ($note_maths + $note_francais + $note_histoire_geo) / 3;
echo 'La moyenne est de '.$moyenne.' / 20.'; //Résultat : La moyenne est de 12 / 20.

//3

$prix_ht = 50;
$tva = 20;
$prix_ttc = $prix_ht * (1 + ($tva / 100));
echo 'Le prix TTC du produit est de '.$prix_ttc.' €.';

//4
$x = 2;
$y = 3;
$z = ($x + $y) * 5;


























