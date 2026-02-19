<?php

$nums=readline("Enter Number list : " );
$parts=array_map("trim",explode(",",$nums));

$numArr=array_map("intval",$parts);


$count=count($numArr);
for($i=0;$i<$count;$i++){
    $value=$numArr[$i];
    echo"$i : ";
    for($j=0;$j<$value;$j++){
        echo"*";
    }
    echo"\n";
}

?>