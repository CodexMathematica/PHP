<?php

class Security {
    private string $privateKey;
    private string $publicKey;

    public function __construct(){
        $this->privateKey ='789';
        $this->publicKey ='000';
    }

    public function getKeys(): void {
        echo 'Mes clefs sont :' . $this->privateKey . ' ' . $this->publicKey . '.';
    }

}