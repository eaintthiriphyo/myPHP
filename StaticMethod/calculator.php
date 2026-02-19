<?php

class Calculator{
    public static $val="Testing";
    public static function Add($x,$y){
        return $x+$y;
    }

    public static function Sub($x,$y){
        return $x-$y;
    }
}



$val=Calculator::Add(1,2);
echo "Addtion : ".$val."\n";
$val1=Calculator::Sub(4,2);
echo "Subtraction :".$val1."\n";
echo Calculator::$val;
?>