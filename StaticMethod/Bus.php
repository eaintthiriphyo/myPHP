<?php
require_once __DIR__ . "/Transport.php";

class Bus extends Transport {

    public function cost(float $km): float {
        $costs = $this->baseFare + (200 * $km);
        return $costs;
    }
}
?>
