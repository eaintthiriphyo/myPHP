<?php
$line=readline("Enter number list : ");
$parts=array_map("trim",explode(",",$line));
print_r($parts);
$nums=array_map("intval",$parts);
print_r($nums);

$total=0;
$len=count($nums);
for($i=0;$i<$len;$i++){
    if($nums[$i]%2==0){
        $total+=$nums[$i];
    }
}

echo "Total number is $total.";

?>