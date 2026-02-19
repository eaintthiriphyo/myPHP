<?php
require_once __DIR__ ."/Transport.php";

class Taxi extends Transport{
    public function cost(float $km):float{
        $costs=$this->baseFare+(600*$km);
        return $costs;
    }
}

?>