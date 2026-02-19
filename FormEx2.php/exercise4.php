<?php
$input=readline("Enter operation : ");
$ops=array_map("trim",explode(",",$input));
$result=0;
$arr=[];

foreach($ops as $op){

    if(is_numeric($op)){
        $arr[]=(int)$op;
    }
    if($op=="C"){
        array_pop($arr);
    }
    if($op=="D"){

 $arr[] = $arr[count($arr) - 1] * 2;
     }

    if($op=="+"){
        $arr[] = $arr[count($arr) - 1] + $arr[count($arr) - 2];
    }

}

foreach($arr as $a){
    $result+=$a;
}
print_r("The Total sum is ".$result);

?>