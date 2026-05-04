<?php

abstract class Shape {
    protected $ancho;
    protected $alto;

    public function __construct($ancho, $alto) {
        $this->ancho = $ancho;
        $this->alto = $alto;
    }

    // método obligatorio para hijxs
    abstract public function calcularArea();
}

?>