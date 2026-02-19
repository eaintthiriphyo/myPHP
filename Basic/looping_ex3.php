<?php
echo "Enter Number : ";
$num=(int)(trim(fgets(STDIN)));

if($num<=1){
echo "$num is not prime number";
}else{

    $i=2;
    while($i<=sqrt($num)){
        if($num%$i==0){
            echo "$num is not prime number";
            exit;
        }
        $i++;
    }
    echo "$num is prime number";
}
    

?>