<?php

$input=readLine("Enter Number Lists : ");
$parts=array_map("trim",explode(",",$input));
$nums=array_map("intval",$parts);
$even=[];
foreach($nums as $value){
    if($value%2==0){
    $even[]=$value;
    }
}
print_r($even);
?>