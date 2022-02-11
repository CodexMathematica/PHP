<?php

//1 En utilisant la boucle while, afficher tous les codes postaux possibles pour le département 77(de 77000 à 77999 inclus).

//2 En utilisant la boucle for, afficher la table de multiplication du chiffre 5.

//3 En utilisant deux boucles for, écrire un script qui produit le résultat ci-dessous.
// 1
// 22
// 333
// 4444
// 55555

//4 Déclarer une variable avec le nom de votre choix et avec la valeur 0. Tant que cette variable n'atteint pas 20, il faut :
// o l'afficher ;
// o incrémenter sa valeur de 2 ;
// remarque : Si la valeur de la variable est égale à 10, la mettre en valeur avec la balise HTML appropriée.

//5 Écrivez un programme pour calculer la factorielle d’un nombre en utilisant la boucle for en PHP (n!)

//Correction

//1
$i = 77000;
while($i <= 77999){
    echo $i . ' ';
    $i++;
}

//2
echo '<br>';
$n = 5;
for($i =1; $i <= 10; $i++){
    echo $n . ' x ' . $i . ' = ' . ($n * $i) . '<br>';
}

//3
echo '<br>';

for ($i = 1; $i <= 5; $i++){
    for($k = 1; $k <= $i; $k++){
        echo $i;
    }
    echo '<br>';
}

//4
echo '<br>';

$k = 0;

while ($k <= 20) {
    if($k === 10){
        echo '<strong>' . $k . '</strong>';
    }else{
        echo $k;
    }
    echo '<br>';
    $k = $k + 2;
}

//5

echo '<br>';

$n = 3;
$f = 1;

for($i = $n; $i >=1; $i--){
    $f = $f * $i;
}

echo "La factorielle de $n est $f";