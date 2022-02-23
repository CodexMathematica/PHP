<?php 

class Pokemon{
    private string $name;
    private string $type;
    private int $hp;
    private int $defense;

    public function __construct($name, $type, $hp) {
        $this->setName($name);
        $this->setType($type);
        $this->setHp($hp);
        $this->defense = rand(0,2);
    }

    public function presentation(): string { 
        (string) $presentation = ($this->type === 'water') ? "Je suis un $this->name de type eau" : "Je suis un $this->name de type feu";

        return $presentation;
    }

    public function attack(): int { 
        if($this->getType() === 'water'){
            $att = rand(2,9);
        }elseif($this->getType() === 'fire'){
            $att = rand(5,6);
        }else{
            $att = rand(0,10);
        }
        return $att;
    }

    public function updateHealth(int $value):void { 
        $deg = $value - $this->defense;
        $this->hp -= $deg;
        if($deg <= 1 ){
            echo '<p> L\'ataque n\'est pas trés efficace, ' . $this->name . ' subit ' . $value . ' de dommage. Ses points de vies tombe à : ' . $this->hp . '</p>';
        }elseif($deg > 1 && $deg <= 5){
            echo '<p> Ouch !' . $this->name . ' subit ' . $value . ' de dommage. Ses points de vies chutent à : ' . $this->hp . '</p>';
        }else{
            echo '<p> Attaque critique !!! ' . $this->name . ' subit ' . $value . ' de dommage. Ses points de vies dégringolent à : ' . $this->hp . '</p>';
        }
    }


    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = ucfirst($name);

        return $this;
    }

    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of hp
     */ 
    public function getHp()
    {
        return $this->hp;
    }

    /**
     * Set the value of hp
     *
     * @return  self
     */ 
    public function setHp($hp)
    {
        $this->hp = $hp;

        return $this;
    }

    /**
     * Get the value of defense
     */ 
    public function getDefense()
    {
        return $this->defense;
    }

    /**
     * Set the value of defense
     *
     * @return  self
     */ 
    public function setDefense($defense)
    {
        $this->defense = $defense;

        return $this;
    }
}