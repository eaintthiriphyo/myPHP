<?php
$input=readline("Enter Words Series : ");
$parts=array_map("trim",explode(",",$input));
$words=array_map("intval",$parts);
$new_arr=[];
$length=count($words);

for($i=0;$i<$length;$i++){
    
    for($j=$i+1;$j<$length;$j++){
        if($words[$i]==$words[$j]){
            $words[$j]=false;
        }


}

}

foreach($words as $key){
if($key==false){
continue;
}
$new_arr[]=$key;
}

print_r($new_arr);
?>