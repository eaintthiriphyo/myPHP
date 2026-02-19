<?php

$base_shipping=7;

echo "Enter Total cost : ";
$totalCost=(int)trim(fgets(STDIN));

$cuponCode="FREESHIP";
echo "Enter Cupon Code : ";
$isFreeship = strtoupper(trim(fgets(STDIN)));

echo "Vip user or not (enter yes or no) :";
$isVip=strtolower(trim(fgets(STDIN)));

if($totalCost>=100 || $isFreeship==$cuponCode|| $isVip=="yes"){
    echo "Shipping fee is free";
}else{
    echo"Shipping fee is $ $base_shipping";
}



?>