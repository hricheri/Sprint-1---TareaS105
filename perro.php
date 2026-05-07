<?php

require_once "Animal.php";

class Perro extends Animal {

    public function hablar() {
        echo $this->nombre . " hace: Guau<br>";
    }
}

?>