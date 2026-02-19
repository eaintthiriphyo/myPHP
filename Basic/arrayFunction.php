<?php
//update array using array imdex.
$cars=array("BMW","Honda","Nissan");
//update array using array imdex.

$cars[2]="Ford";
//add value in end of  array .
$cars[]="Nissan";
//add value in front of  array .
array_unshift($cars,"Toyota","Suzuki");
array_splice($cars,0,3,"MGEV");

//add value in end of  array using function.
array_push($cars,"Honda","Ford");

//combine two array
$cars1=array("Bike","Bicycle");
$result=array_merge($cars,$cars1);
//remove arry index and value  from array using key
unset($result[0]);
$result[0]="test";
//remove value from end of array
array_pop($result);
//remove value from infront of array
array_shift($result);
//array reverse
$revArr=array_reverse($result);
// print_r($cars);
// print_r($revArr);

$res=array_search("Bicycle",$result);
print_r($result);
//to know array pointer
echo current($result);
next($result);
echo current($result);
echo end($result);
// print_r($res);
//default value filled in array
$value=array_fill(0,5,-1);

$arr=array_map('strtoupper',$result);
print_r($arr);

$arr1=array_map('intval',$result);
print_r($arr1);

// print_r($value);

$num=array(2,5,7); 
$mulRes=array_map("multiply",$num);

function multiply($x){
    for($i=1;$i<=12;$i++){
        $res=$i*$x;
        echo "$i* $x =$res\n";
    }
    echo"-------****-------\n" ;
}

$nums=array(1,5,7,9,2,4,6,8,0);
sort($nums);//ascending
print_r($nums);
rsort($nums);//descending
print_r($nums);
?>