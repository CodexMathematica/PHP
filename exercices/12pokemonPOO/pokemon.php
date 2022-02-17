<?php 
class Pokemon{
    public $name;
    public $type;
    public $hp;
    public $defense;

    public function __construct($name, $type, $hp)
    {
        $this->name = $name;
        $this->type = $type;
        $this->hp = $hp;
        $this->defense = rand(0,2);
    }

    public function presentation(): string { 
        (string) $presentation = "Je suis un $this->name de type $this->type.";

        return $presentation;
    }

    public function attack(): int { 
        if($this->type === 'electrique'){
            $att = rand(3,7);
        }elseif($this->type === 'eau'){
            $att = rand(2,9);
        }elseif($this->type === 'feu'){
            $att = rand(5,6);
        }else{
            $att = rand(0,10);
        }
        return $att;
    }

    public function updateHealth(int $value):void { 
        $deg = $value - $this->defense;
        $this->hp -= $deg;
        echo 'Ouch ' . $this->name . ' subit ' . $value . ' de dommage. Ses points de vies chutent à : ' . $this->hp;
    }

}

if(isset($_POST['submit'])){
    $myPokemon = new Pokemon($_POST['name'], $_POST['type'], $_POST['hp']);
    $randomNames = ['Salameche', 'Pikachu', 'Onyx', 'Chenipan', 'Bulbizar', 'Carapuce'];
    $randomTypes = ['eau', 'feu', 'electrique'];

    $ennemy = new Pokemon($randomNames[rand(0, count($randomNames)-1)], $randomTypes[rand(0, count($randomTypes)-1)], rand(10,20));
}