<?php

$num1=(int)(readline("Enter Number 1 : "));
$num2=(int)(readline("Enter Number 2 : "));
do{
    if($num1>$num2){
        $num1=$num1-$num2;
    }else{

    $num2=$num2-$num1;
    }
}while($num1!=$num2);

echo "GCD number is $num1";




?>