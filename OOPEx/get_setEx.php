<?php
class Car{
    private $brand;
    private $color;

    public function __construct($a,$b){
        $this->brand=$a;
        $this->color=$b;
    }

    public function getBrand(){
        return $this->brand;
    }

    public function setBrand($b){
        $this->brand=$b;
    }

    public function getColor(){
        return $this->color;
    }

    public function setColor($c){
        $this->color=$c;
    }

    public function start(){
        echo "Car Started";
    }
    public function stop(){
        echo "Car Stopped";
    }
}


?>