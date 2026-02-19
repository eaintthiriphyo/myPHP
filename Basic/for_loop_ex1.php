<?php

$count=readline("Enter the count number : ");

$first_num=0;
$second_num=1;
$sum=0;

for($i=0;$i<$count;$i++){

echo "$first_num ";
   $sum=$first_num+$second_num;
   $first_num=$second_num;
   $second_num=$sum;
}
?>