<?php

try{
    $num1=readLine("Enter first num : ");
    $num2=readLine("Enter second num : ");
     if(!preg_match('/[+-]?[0-9]+$/',trim($num1))&&!preg_match('/[+-]?[0-9]+$/',trim($num2))){
         throw new Exception("Both Number must be Integer!!");

        }
     if(!preg_match('/[+-]?[0-9]+/',trim($num1))){
        throw new Exception("First Number must be Integer!!");
    }
    if(!preg_match('/[+-]?[0-9]+/',trim($num2))){
        throw new Exception("Second Number must be Integer!!");
    }
    
    if($num2==0){
        throw new Exception("Divisor not allowed  0");

    }
   echo "Result :". $num1/$num2;
}catch(Exception $e){
    echo "Error : ".$e->getMessage();
}

?>