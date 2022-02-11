<?php

//0 Quelle syntaxe permet d'afficher le deuxième élément du tableau $cocktails ?
// $cocktails = array('Mojito', 'Long Island Iced Tea', 'Gin Fizz', 'Moscow mule');

//1 Déclarer une variable de type array qui stocke les informations suivantes :
// France : Paris
// Allemagne : Berlin
// Italie : Rome
// Afficher les valeurs de tous les éléments du tableau en utilisant la boucle foreach.


//2 En utilisant la fonction rand(), remplir un tableau avec 10 nombres aléatoires. Puis, tester si le chiffre 42 est dans le tableau et afficher un message en conséquence. Enfin, afficher le contenu de votre tableau avec var_dump.

//3 En utilisant la fonction rand(), remplir un tableau avec 10 nombres aléatoires. Puis, trier les valeurs dans deux tableaux distincts. Le premier contiendra les valeurs inférieures à 50 et le second contiendra les valeurs supérieures ou égales à 50. Enfin, afficher le contenu des deux tableaux.

//4 En utilisant le tableau ci-dessous, afficher seulement les pays qui ont une population supérieure ou égale à 20 millions d'habitants et dans un second temps, compter le nombre d'éléments du tableau.
// $pays_population = array(
//     'France' => 67595000,
//     'Suede' => 9998000,
//     'Suisse' => 8417000,
//     'Kosovo' => 1820631,
//     'Malte' => 434403,
//     'Mexique' => 122273500,
//     'Allemagne' => 82800000,
//  );

//5 Quelle syntaxe permet d'afficher l'âge de Manuel ?
// $personnes = array(
//     'Jean' => 16,
//     'Manuel' => 19,
//     'André' => 66
//  );

//0
$cocktails = array('Mojito', 'Long Island Iced Tea', 'Gin Fizz', 'Moscow mule');
echo $cocktails[1];

//1
echo '<br>';

// $pays = array(
//     'France' => 'Paris',
//     'Allemagne' => 'Berlin',
//     'Italie' => 'Rome'
// ); Ancienne écriture

$pays = [
    'France' => 'Paris',
    'Allemagne' => 'Berlin',
    'Italie' => 'Rome'
];

foreach($pays as $p){
    echo $p . ' ';
}
echo '<br>';
foreach($pays as $key => $value){
    echo $key . ' => ' . $value . ' ';
}

//2
echo '<br>';

$tableaus = [];
$i = 0;
while ($i < 10){
    $tableaus[] = rand(0, 50);
    $i++;
}
if(in_array(42, $tableaus)){
    echo 'Le nombre 42 est bien dans le tableau.';
}else{
    echo 'Le tableau ne contient pas la valeur 42.';
}
echo '<br>';
var_dump($tableaus);

//3
$allNumbers = [];
$bigNumbers = [];
$smallNumbers = [];
$i = 0;

while($i < 10){
    $allNumbers[] = rand(0, 100);
    $i++;
}

foreach($allNumbers as $number){
    if($number < 50){
        $smallNumbers[] = $number;
    }else{
        $bigNumbers[] = $number;
    }
}

echo '<br> Le tableau contenant les nombres strictements inférieurs à 50 : ';
foreach($smallNumbers as $sn){
    echo $sn . ' ';
}

echo '<br> Le tableau contenant les nombres supérieurs ou égales à 50 : ';
foreach($bigNumbers as $bn){
    echo $bn . ' ';
}

//4
$pays_population = array(
    'France' => 67595000,
    'Suede' => 9998000,
    'Suisse' => 8417000,
    'Kosovo' => 1820631,
    'Malte' => 434403,
    'Mexique' => 122273500,
    'Allemagne' => 82800000,
 );

 echo'<br> <p>Les pays suivants ont une population supérieur à 20 millions d\'habitants </p><ul>';
$moreThan20m = 0;
foreach($pays_population as $pays => $population) {
    if($population >= 20000000){
        $moreThan20m++;
        echo '<li>'. $pays . '</li>';
    }
}
echo '</ul>';
echo '<br> Il y a ' . count($pays_population) .' élements dans le tableau de départ';
echo '<br> Il y a ' . $moreThan20m .' pays qui ont plus de 20 000 000 d\'habitants.';

//5
$personnes = array(
    'Jean' => 16,
    'Manuel' => 19,
    'André' => 66
 );

 echo'<br> Manuel a '. $personnes['Manuel'] .' ans.';



