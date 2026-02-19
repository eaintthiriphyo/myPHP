<?php
$input=readLine("Enter word Series :");
$word=array_map("trim",explode(",",$input));
$word_len=0;
$longest_word;
foreach($word as $key){
    if(strlen($key)>$word_len){
        $word_len=strlen($key);
        $longest_word=$key;
    }
}
echo "Longest Word is $longest_word";
?>