<?php

$input=readline("Enter character string : ");

$index=-1;
$length=strlen($input);

for($i=0;$i<$length;$i++){
    $count=0;
    for($j=0;$j<$length;$j++){
        if($input[$i]==$input[$j]){
            $count++;
        }
    }

    if($count===1){
        $index=$i;
        break;
        
    }
}

  
   
echo $index;
?>