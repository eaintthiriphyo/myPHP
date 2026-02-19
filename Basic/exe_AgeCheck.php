<?php
echo "Enter Your Age :";
$age=(int)trim(fgets(STDIN));
$result=($age<=13)?"Child" :
 (( $age<=19)?"Teen":
 (( $age<=59)?"Adult":
 "Senior"));
echo $result;
?>