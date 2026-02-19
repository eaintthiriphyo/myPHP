<?php

function multiply($a){
    for($i=1;$i<=12;$i++){
        $value=$i*$a;
        echo "$i * $a = $value\n";
    }
}

$x=readline("Enter a number for multiplication table : ");
multiply($x);
?>