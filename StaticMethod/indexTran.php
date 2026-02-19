<?php
require_once __DIR__ ."/Bus.php";
require_once __DIR__ ."/Taxi.php";
require_once __DIR__ ."/RideShare.php";


function printCost(Transport $t,float $km){
    $className=get_class($t);
    $cost=$t->cost($km);
    echo "Transport Type is $className and cost is $ $cost\n";

}
$bus=new Bus(400);
$taxi=new Taxi(1000);
$rideShare=new RideShare(500,1.5);

printCost($bus,100);
printCost($taxi,100);
printCost($rideShare,100);
?>