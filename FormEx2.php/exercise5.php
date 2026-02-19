<?php
$input=readline("Enter Input : ");
$word=array_map("trim",explode(" ",$input));
$end_word=array_pop($word);
$end=trim($end_word,'"');
$length=strlen($end);
echo 'Explanation : The last word is "'.$end .'" with length '. $length;

?>