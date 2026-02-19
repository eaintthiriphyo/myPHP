<?php

function climbStair($n){
     $a=1;
        $b=1;
        $c=0;
    if($n==1 || $n==0){
       $c=1;
    }
    
        for($i=2;$i<=$n;$i++){
            $c=$a+$b;
            $a=$b;
            $b=$c;
        }
    return $c;
}

echo climbStair(6);
?>