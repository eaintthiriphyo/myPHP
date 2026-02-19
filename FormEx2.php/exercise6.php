<?php
$input=readline("Enter pattern , sequence : ");
$a=array_map("trim",explode(",",$input));

$arr=array_pop($a);
$pattern=array_shift($a);
$str=array_map("trim",explode(" ",$arr));

$pattern_length=strlen($pattern);
$str_length=count($str);

$output="true";
if($pattern_length!=$str_length){
   echo "Your pattern and sequence length are not same";
    
}else{
for($i=0;$i<$pattern_length;$i++){
   
    for($j=$i+1;$j<$pattern_length;$j++){
        if($pattern[$i]==$pattern[$j]){
            if($str[$i]!=$str[$j]){

                $output = "false";
                break; 
            }
        }

         if($pattern[$i]!=$pattern[$j]){
            if($str[$i]==$str[$j]){

                $output = "false";
                break;
            }
        }
    }
    
}
print_r($output);

}







?>