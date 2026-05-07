<?php

require_once "Animal.php";

class Gato extends Animal {

    public function hablar() {
        echo $this->nombre . " hace: Miau<br>";
    }
}

?>