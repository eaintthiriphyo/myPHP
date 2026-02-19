<?php
$usnum = readline("Enter input : ");
$input = array_map('trim', explode(',', $usnum));
$len = count($input);
$result = [];
$k = 0;
for ($i = 0; $i < $len; $i++) {
 $bool = true;
    for ($j = $i; $j >= 0; $j--) {
 
        if ($input[$i] == $input[$j]) {
            $bool = false;
        }
    }
    if ($bool) {
        $result[$k] = $input[$i];
        $k++;
    }
}
print_r($result);
  //3,1,3,2,1,4,2,5
 