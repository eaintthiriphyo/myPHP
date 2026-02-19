<?php
$nums=array(1,2,5,7,9);
function searchNum($nums,$target){

$low=0;
$high=count($nums)-1;

while($low<=$high){
    $mid=(int)(($low+$high)/2);

if($nums[$mid]==$target){
return $mid;
}else if($nums[$mid] < $target){
        $low=$mid+1;
    
}else{
    $high=$mid-1;
}
}
return $low;

}

$num1=searchNum($nums,10);
// $num2=searchNum($nums,2);
// $num3=searchNum($nums,7);

echo "$num1\n";
// echo "$num2\n";

// echo "$num3\n";



?>