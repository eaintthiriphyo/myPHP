<?php
echo "Enter Start Number: ";
$L = (int)trim(fgets(STDIN));

echo "Enter End Number: ";
$R = (int)trim(fgets(STDIN));


for ($i = $L; $i <= $R; $i++) {
    if ($i < 2) continue;  

    $isPrime = true;  

    for ($j = 2; $j * $j <= $i; $j++) {
        if ($i % $j == 0) {
            $isPrime = false;
            break;  
    }
    
    }
    if ($isPrime) {
        echo $i ." ";
    }
}

?>
