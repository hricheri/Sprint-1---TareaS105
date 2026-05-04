<?php

class Triangulo extends Shape {

    public function calcularArea() {
        return ($this->ancho * $this->alto) / 2;
    }
}


?>