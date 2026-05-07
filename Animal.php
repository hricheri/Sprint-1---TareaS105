<?php

abstract class Animal {
    protected string $nombre;

    public function __construct(string $nombre) {
        $this->nombre = $nombre;
    }

    abstract public function hablar();
        // se redefine en cada animal 
}


?>