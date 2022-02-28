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
<!-- Modificateur de propriétés et méthodes : public, private, protected
    Modificateur suplémentaire : static (accessible sans instancier la classe, on y accéde avec ::)
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

<!-- L'heritage -->

<!-- But : Créer un membre avec un petit quelque chose en plus -->

<?php

class SgcAlienMember extends SgcMember {
    public $race;

    public function __construct($last_name, $first_name, $rank, $race) {
        parent::__construct($last_name, $first_name, $rank);
        $this->race = $race;
    }

    public function identity(){
        var_dump("Je suis un $this->race !");
    }
}

$member3 = new SgcAlienMember("", "Teal'c", "membre externe", "Jaffa");

//Notes : On peut surcharger en réécrivant une méthode du parent/
// La propriété de la classe parente ne doit pas être en private mais en protected pour être accessible
// On peut extend qu'une seule classe.

?>

<!-- Interface et classe abstraite -->

<?php
// Une classe abstraite : c'est une classe non instanciable dans laquelle on ne définit pas les fonctions (on nomme des fonctions en laissant les accolades vides).
//Les enfants qui 'extends' doivent définir obligatoirement les fonctions 'abstract'.
abstract class Credential {
    protected $accreditation;

    public function __construct($accreditation){
        $this->accreditation = $accreditation;
    }

    abstract public function authorisation();
}

?>

<?php
// ON peut implémenter plusieurs interfaces en utilisant le mot clef 'implements'
// L'interface liste des méthodes vide qu'il faudra obligatoirement définir dans la classe qui l'implémente
interface Weapon {
    public function shoot();
}
// class SgcMember implements Weapon ...
?>

<!-- Les traits (depuis php 5.4) -->
<!-- 'Classe' que l'on ne peut pas instancier (le but est de regrouper des méthodes) -->
<!-- Répond au probléme que l'on ne peut pas hériter de plusieur classes (Les methodes ne sont pas vides contrairement aux interfaces) -->
<?php

class Mobile{ // A ecrire dans un autre fichier et inclure ensuite avant la classe smartphone
    function power(){
        echo "Unlimited power !!! <br>";
    }
}

trait Lightsaber{ // A ecrire dans un autre fichier et inclure ensuite avant la classe smartphone
    function laser(){
        echo "A lightsaber in my pocket. <br>";
    }
}

trait Pistolaser{ // A ecrire dans un autre fichier et inclure ensuite avant la classe smartphone
    function laser(){ // Que se passe t-il si le trait à une fonction du même nom qu'un fonction contenu dans un autre trait ?
        echo "Pew pew !!! <br>";
    }
}

class Smartphone extends Mobile {
    use Lightsaber, Pistolaser {
        Lightsaber::laser insteadOf Pistolaser; //Indique que la methode de Lightsaber prime sur la methode homonyme.
        Pistolaser::laser as shoot; // Change le nom de la methode pour l'utiliser sans confusion
    }
    //Peut avoir plein de traits (et on peut même ajouter des traits dans des traits)
}

$phone = new Smartphone;
$phone->power();
$phone->laser();
$phone->shoot();

?>

<!-- Namespace: Séparer le code dans plusieurs fichiers (depuis 5.3) -->
<!-- Avantage dans les gros projet ou l'on rique d'avoir des classes du même nom. Avec namespace on utilise un alias-->

<!-- Exemple de définition d'un namespace: namespace App\Client\Compte;   Régle : définir le namespace en début de fichier -->
<!-- Exemple de référence à un namespace: use App\Client\Compte as CompteClient;    Indique que l'on fait référence au fichier dans ce namepsace -->
<!-- Voir le dossier 3-1 sur les namspaces pour la démonstration -->
