<?php
echo "Enter first N rows :" ;
$line=(int)(trim(fgets(STDIN)));

for($i=0;$i<$line;$i++){
    $current=1;
    for($j=0;$j<=$i;$j++){
        echo "$current ";
        $current = $current* ($i - $j) / ($j + 1);

    }
     echo "\n";


}

?>

