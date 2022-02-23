<?php

namespace App\Payment; //Peut importe le nom

class Security {
    private string $privateKey;
    private string $publicKey;

    public function __construct(){
        $this->privateKey ='123';
        $this->publicKey ='456';
    }

    public function getKeys(): void {
        echo 'Mes clefs sont :' . $this->privateKey . ' ' . $this->publicKey . '.';
    }

}