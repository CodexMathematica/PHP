<?php
//1 Ecrire une fonction qui prend 2 paramétres (price et quantity). La fonction retourne la variable totalPrice qui est le produit de price par quantity.
// Afficher le prix, la quantité et le prix total.

//2 Ecrire une fonction qui détermine si une année est bisextile (Année qui est un multiple de 4 ou 400).
// Retoune un booléen

//3 A partir du résultat de la fonction de l'exercice 2 faire apparaitre une phrase pour annoncer si l'année est bisextile.

//4 Ecrire une fonction qui prend un nombre en parametre et qui indique si le nombre est pair ou impair

//1 
$price = 2;
$quantity = 25;
function calculatePrice($price, $quantity) {
    $calculatedPrice = $price * $quantity;
    return $calculatedPrice;
}
echo "Prix :" . $price . "<br>";
echo "Quantité :" . $quantity . "<br>";
echo "Prix total :" . calculatePrice($price, $quantity);

// 2
$year = 2000; // Années bisextile :2000 et 2004 | non bisextile :1999 2001 2003 2005
function isLeapYear($year){
    if($year % 400 == 0 || $year % 4 == 0){
        return true;
    }else{
        return false;
    }
}

//3
if (isLeapYear($year)){
    echo $year . "est une année bisextile";
}else{
    echo $year . "n'est pas une année bisextile";
}

//4
function evenOrOde($num) {
    if($num % 2 == 0){
        echo 'Pair';
    }else{
        echo 'Impair';
    }
}
