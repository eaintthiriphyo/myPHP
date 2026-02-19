<?php
echo "Number 1 :";
$num1=(int)(trim(fgets(STDIN)));
echo "Number 2 : ";
$num2=(int)(trim(fgets(STDIN)));

echo "Enter Operator(+ or - or * or /) : ";
$op=trim(fgets(STDIN));
$result;

switch($op){
    case "+":
        $result=$num1+$num2;
        break;
    case "-":
        $result=$num1-$num2;
        break;
    case"*":
        $result=$num1*$num2;
        break; 
    case"/":
        if($num2==0){
            $result="Cannot divided by 0";
            break;
        }else{
            $result=$num1/$num2;
            break;
        }
    default:$result="Invalid Input";
       
}
echo "Answer is $result";

?>