<?php
require_once __DIR__."/Transport.php";
class RideShare extends Transport{


    private float $surgeMultiplier;
    public function __construct(float $baseFare, float $surgeMultiplier) {
        $this->baseFare=$baseFare;
        $this->surgeMultiplier = $surgeMultiplier;
    }

    public function cost(float $km):float{
        $costs=($this->baseFare+(500*$km))*$this->surgeMultiplier;
        return $costs;
    }
}


?>