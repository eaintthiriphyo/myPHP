<?php
for($i=99;$i>=50;$i--){
    echo "$i\n";
}
for($j=50;$j>=10;$j-=2){
    echo "$j\n";
}
for ($k = 10; $k >= 0; $k--) {
    if($k<2){
        continue;
    }
    $prime = true;

    for ($i = 2; $i <= sqrt($k); $i++) {
        if ($k % $i == 0) {
            $prime = false;
            break; // stop checking once not prime
        }
    }

    if ($prime) {
        echo "$k\n";
    }
}

?>