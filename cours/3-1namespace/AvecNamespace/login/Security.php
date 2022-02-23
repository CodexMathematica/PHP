<?php

namespace App\Login; //Peut importe le nom

class Security {
    private string $privateKey;
    private string $publicKey;

    public function __construct(){
        $this->privateKey ='147258';
        $this->publicKey ='963258';
    }

    public function getKeys(): void {
        echo 'Mes clefs sont :' . $this->privateKey . ' ' . $this->publicKey . '.';
    }

    public function forWho(): void {
        $people = new Customer(); // Pas besoin de préciser le namespace car les 2 fichiers (celui ou l'on est et Customer sont dans le même namespace)
        echo $people->presentation();
    }
}

//En conclusion PHP cherche en priorité dans le me^me namespace que le fichier ou on instancie.