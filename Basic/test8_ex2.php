<?php
echo"Enter Your Correct : ";
$correct=(int)trim(fgets(STDIN));
echo "Enter time you taken : ";
$timeSec=(int)trim(fgets(STDIN));
$baseScore=$correct*5;
if($timeSec<=60){
    $baseScore+=10;
}elseif($timeSec>120){
    $baseScore-=5;
}

if($baseScore>100){
    $baseScore=100;
}elseif($baseScore<0){
    $baseScore=0;
}
echo "Your Score is $baseScore";

?>