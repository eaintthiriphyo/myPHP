<?php
abstract class Transport{
    protected float $baseFare;

    public function __construct(float $baseFare){
        $this->baseFare=$baseFare;
    }
    abstract public function cost(float $km):float;
}


?>