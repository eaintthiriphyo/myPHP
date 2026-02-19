<?php
require_once __DIR__."/cat.php";
require_once __DIR__.'/dog.php';

$dog=new Dog();
$dog->makeSound();
$dog->sleep();

$cat=new Cat();
$cat->makeSound();
$cat->sleep();



?>