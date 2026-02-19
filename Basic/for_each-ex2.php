<?php
$input=readLine("Enter Number Lists :");
$parts=array_map("trim",explode(",",$input));
$nums=array_map("intval",$parts);

$sum=0;
foreach($nums as $value){
    $sum+=$value;

}
echo "Total is $sum";
?>