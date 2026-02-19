<?php
echo "Enter Number :";

$num=(int)trim(fgets(STDIN));
$revNum=0;
while($num>0){
$revNum=(int)($revNum*10+$num%10);
$num=(int)($num/10);
}

echo $revNum;

?>