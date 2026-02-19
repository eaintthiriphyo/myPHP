<?php
echo "Enter Start Number: ";
$L = (int)trim(fgets(STDIN));

echo "Enter End Number: ";
$R = (int)trim(fgets(STDIN));

for($i=$L;$i<$R;$i++){
    if($i<2){
        continue;
    }
    $isPrime=true;
    $j=2;
    while($j<=sqrt($i)){
        if($i%$j==0){
            $isPrime=false;
        }
        $j++;
   
    }
     if($isPrime){
        echo "$i ";
    }
}


?>