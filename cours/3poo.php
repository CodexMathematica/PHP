<!-- Programmation orientée objet -->

<!-- But : meilleur organisation du code (changement de structuration du code)
Principe : regrouper le code de même nature dans une classe
Avantage : Reutilisation du code, structure claire, simple à maintenir (DRY)
 -->

<!-- En programmation inperative (donc pas en POO) -->

<?php

$last_name1 = "O'neill";
$first_name1 = "Jack";
$rank1 = "colonel";

$last_name2 = "Jackson";
$first_name2 = "Daniel";
$rank2 = "docteur en histoire";

function presentation($last_name, $first_name, $rank){
    var_dump("Bonjour, je me nomme $first_name $last_name et je suis $rank");
}

presentation($last_name1, $first_name1, $rank1);
echo '<br>';
presentation($last_name2, $first_name2, $rank2);

?>
<!-- Avec l'utilisation de classe (POO) -->

<?php
//Définition d'une classe
class Sg1Member{
    public $first_name; // public est un modificateur
    public string $last_name; // String correspond au typage
    public $rank; // $rank est une propriété

    public function presentation(){ //Les fonctions dans une classe se nomment méthodes
        var_dump("Bonjour, je me nomme $this->first_name $this->last_name et je suis $this->rank");
    }
}

// On instancie la classe et on donne une valeur aux propriétés (cette étape sera remplacée par l'utilisation d'un constructeur)
$member0 = new Sg1Member();
$member0->last_name = "Carter";
$member0->first_name = "Samantha";
$member0->rank = "docteur en physique";

$member0->presentation();

?>

<!-- Ajout d'un constructeur -->

<?php

class SgcMember{
    public $first_name;
    public $last_name;
    public $rank;

    public function __construct($last_name, $first_name, $rank) { //Automatiquement appelée à chaque fois que l'on fait une instance
        $this->last_name = $last_name;
        $this->first_name = $first_name;
        $this->rank = $rank;
    }

    public function presentation() {
        var_dump("Bonjour, je me nomme $this->first_name $this->last_name et je suis $this->rank");
    }
}

$member1 = new SgcMember("Hammond", "George", "General");
$member1->presentation();

?>

<!-- Encapsulation -->

<!-- But : Sécuriser le contenu des variables (en controler l'accès) -->
<!-- Modificateur de propriétés : public, private, protected
    Modificateur de méthodes : public, static (accessible sans instancier la classe)
    Accesseur : getter et setter
-->

<?php 
class Alien{
    public $alliance;
    public $race;

    public function __construct($alliance, $race){
        $this->setAlliance($alliance);
        $this->setRace($race);
    }

    public function presentation() {
        var_dump("Bonjour, je suis un $this->race et je suis de l'alliance $this->alliance");
    }

    public function setAlliance($alliance){
        $this->alliance = $alliance;
    }

    public function getAlliance(){
        return $this->alliance;
    }

    public function setRace($race){
        $this->race = $race;
    }

    public function getRace(){
        return $this->race;
    }

}

$member2 = new Alien("Terrienne", "terrien");
$member2->presentation();


?>








