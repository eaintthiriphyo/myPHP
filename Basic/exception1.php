<?php
// $age=readline("Enter age : ");
// if($age<0 || $age>150){
//     throw new Exception("exceed limited age");
// }
// echo $age+1;

try{
   $num=readline("enter num : ");
   if(!preg_match("/[+-]?[0-9]+$/",trim($num))){
    throw new Exception("Input must be number");
   echo "Your number is $num";
   }


}
catch(Exception $e){
    echo "Error:".$e->getMessage();
}

?>