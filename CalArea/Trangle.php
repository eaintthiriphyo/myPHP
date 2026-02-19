<?php
require_once __DIR__."/Geometric.php";

class Triangle extends Geometric{
    private float $base;
        private float $heigth;

    
    public function __construct($b,$h){
        $this->base=$b;
        $this->heigth=$h;

    }
    function calArea():void{
       $area= ($this->base*$this->heigth)/2;
       echo $area;
    }
}

?>