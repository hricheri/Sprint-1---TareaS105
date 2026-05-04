<?php

class Animal {
    protected $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function hablar() {
        // se redefine en cada animal
    }
}

?>