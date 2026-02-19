<?php

$input=readLine("Enter the first array : ");
$arr1=array_map("trim",explode(",",$input));


$input2=readLine("Enter the second array : ");
$arr2=array_map("trim",explode(",",$input2));

$result=[];

$i=$j=0;
   


   while($i<count($arr1) && $j<count($arr2)){
    if($arr1[$i]<=$arr2[$j]){
        $result[]=$arr1[$i];
        $i++;
    }else{
        $result[]=$arr2[$j];
        $j++;
    }


   
   }
    while($i<count($arr1)){
        $result[]=$arr1[$i];
        $i++;
    }

    while ($j<count($arr2)){
        $result[]=$arr2[$j];
        $j++;
        
        }


        print_r($result);
?>