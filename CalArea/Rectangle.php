<?php
require_once __DIR__."/Geometric.php";

class Rectangle extends Geometric{
    private float $width;
        private float $heigth;

    
    public function __construct($l,$h){
        $this->width=$l;
        $this->heigth=$h;

    }
    public function calArea():void{
       $area= $this->width*$this->heigth;
       echo $area;
    }
}

?>