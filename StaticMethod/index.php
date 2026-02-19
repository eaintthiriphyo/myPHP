<?php

require_once __DIR__ ."/Bus.php";
require_once __DIR__ ."/Taxi.php";
require_once __DIR__ ."/RideShare.php";
$distance=0;
$baseFare=0;
$transport="";
$surge;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
    Distance : <input type="number" name="distance" required><br><br>
    BaseFare : <input type="number" name="baseFare" required ><br><br>
    Surge : <input type="number" name="surge"><br><br>

    Transport Type <br><br>
    <button type="submit" name="action" value="bus">Bus</button>
    <button type="submit" name="action" value="taxi">Taxi</button>
    <button type="submit" name="action" value="rideShare">Ride Share</button>


    <br><br>
    
  </form>
  <?php
  if($_SERVER["REQUEST_METHOD"]==="POST"){
    $distance=$_POST["distance"];
    $baseFare=$_POST["baseFare"];


    if(($_POST["action"] ??'')=="bus"){
        $bus=new Bus($baseFare);
        printCost($bus,$distance);
    }
    if(($_POST["action"] ??'')=="taxi"){
        $taxi=new Taxi($baseFare);
        printCost($taxi,$distance);
    }
    if(($_POST["action"] ??'')=="rideShare"){
$surge =  $_POST["surge"] !== '' ? (float)$_POST["surge"] : 1.5;
        $rideShare=new RideShare($baseFare,$surge);
        printCost($rideShare,$distance);
    }
   
    
   
}
  function printCost(Transport $t,float $km){
    $className=get_class($t);
    $cost=$t->cost($km);
    echo "<h3>Transport Type : $className. <br> Cost : $ $cost .</h3><br>";

}
  ?>
</body>
</html>


