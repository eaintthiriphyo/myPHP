<?php
class Car{
    public $brand;
    public $color;

    public function __construct($brand,$color){
        $this->brand=$brand;
        $this->color=$color;
    }
}

$car1=new Car("Honda","Black");
echo $car1->brand;
?>