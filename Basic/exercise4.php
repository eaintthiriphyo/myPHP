<?php
$input=readline("Enter Word Series :");
$word=explode(",",$input);
foreach($word as $value){
    if($value==" "){
        continue;
    }
    echo "$value\n";

}

?>