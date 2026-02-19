<?php
require_once __DIR__."/Geometric.php";

class Circle extends Geometric{
    private float $radius;

    public function __construct($radius){
        $this->radius=$radius;
    }
    public function calArea(): void {
       $area = $this->radius*$this->radius * PI();
       echo $area;
    }
}

?>