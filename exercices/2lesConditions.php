<?php
//1 Déclarer une variable $budget qui contient la somme de 1 553,89 €. Déclarer une variable $achats qui contient la somme de 1 554,76 €. Afficher si le budget permet de payer les achats.

//2 Déclarer une variable $age qui contient la valeur de type integer de votre choix. Réaliser une condition pour afficher si la personne est mineure ou majeure.

//3 Déclarer une variable $sexe qui contient une chaîne de caractères. Créer une condition qui affiche un message différent en fonction de la valeur de la variable.

//4 Déclarer une variable $heure qui contient la valeur de type integer de votre choix comprise entre 0 et 24. Créer une condition qui affiche un message si l'heure est le matin, l'après-midi ou la nuit.

/*--------------------------- Réponses -------------------------------------*/

//1
$budget = 1553.89;
$achats = 1554.76;
if($budget >= $achats) {
echo 'Le budget ('.$budget.' €) permet de payer tous les achats ('.$achats.' €).';
}else {
echo 'Le budget ('.$budget.' €) ne permet pas de payer tous les achats ('.$achats.' €).';
}

//2
$age = 19;
if($age >= 18){
    echo 'Vous êtes majeur.';
}else{
    echo 'Vous êtes mineur.';
}

//3 
$sexe = 'homme';
if($sexe == 'femme') {
    echo 'Bonjour Madame.';
}elseif($sexe == 'homme') {
    echo 'Bonjour Monsieur.';
}else {
    echo 'Bonjour sexe inconnu.';
};

//4
$heure = 14;
if($heure < 0 || $heure > 24) {
    echo 'Houla, cette heure est incorrecte.';
}elseif($heure >= 7 && $heure < 12) {
    echo 'Bonne matinée.';
}elseif($heure >= 12 && $heure < 18) {
    echo 'Bonne après-midi.';
}else {
    echo 'Bonne nuit.';
}




