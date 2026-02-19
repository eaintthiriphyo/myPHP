<?php

$coupon="SAVE 10";
echo "Enter your Cuopon : ";
$inputCoupon=strtoupper(trim(fgets(STDIN)));
$discount=($coupon==$inputCoupon)?"10 % off":"No discount";
echo $discount;


?>