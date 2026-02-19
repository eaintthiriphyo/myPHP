<?php
require_once __DIR__ .'/animal.php';

class Dog extends Animal{
    public function makeSound(){
        echo "Woof Woof....";
    }
}


?>