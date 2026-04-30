<?php
// POO 2
//EJERCICIO 1
class Animal {
    protected $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function hablar() {
        // se redefine en cada animal
    }
}

class Perro extends Animal {

    public function hablar() {
        echo $this->nombre . " hace: Guau<br>";
    }
}

class Gato extends Animal {

    public function hablar() {
        echo $this->nombre . " hace: Miau<br>";
    }
}



//EJERCICIO 2

abstract class Shape {
    protected $ancho;
    protected $alto;

    public function __construct($ancho, $alto) {
        $this->ancho = $ancho;
        $this->alto = $alto;
    }

    // método obligatorio para hijos
    abstract public function calcularArea();
}

class Triangulo extends Shape {

    public function calcularArea() {
        return ($this->ancho * $this->alto) / 2;
    }
}

class Rectangulo extends Shape {

    public function calcularArea() {
        return $this->ancho * $this->alto;
    }
}

?>