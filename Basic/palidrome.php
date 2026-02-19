<?php
echo "Enter Word : ";
$word=strtolower(trim(fgets(STDIN)));
$words=str_split($word);
$count=strlen($word);
 $isPalidrome=true;

$i=0;
while($i<$count/2){
    if($words[$i]!=$words[$count-$i-1]){
        $isPalidrome=false;
        break;
    }
    $i++;
}

if($isPalidrome){
    echo "$word is Palidrome";
}else{
     echo "$word is not Palidrome";

}


?>