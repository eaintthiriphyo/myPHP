<?php
require_once __DIR__."/animal.php";
class Cat extends Animal{
    public function makeSound(){
        echo "Meow Meow...";
    }
}

?>