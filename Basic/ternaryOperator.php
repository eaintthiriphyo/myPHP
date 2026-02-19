<?php
$userName="jasmine";
$display=$userName?:"Guest";
echo $userName ?? "No Name";
echo $display."\n";

$a=10;
$result=($a<20)?"greater than 10":"less than 10";
echo "$result";

?>