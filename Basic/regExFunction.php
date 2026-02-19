<?php
//i=case-insensitive
//m=multiline search
//^=search first letter
$txt="Helloooooo.\nThis is a beauty morning.\nHow are you?\n";

// echo $txt;
$pattern="/H/i";
// $pattern="/^H/i";
// $pattern="/^h/i";

// echo preg_match_all($pattern,$txt);

$pattern1="/h/mi";
// echo preg_match_all($pattern1,$txt);
$pattern2="/o+/";
// echo preg_match_all($pattern2,$txt);

$pattern3="/o*/";
// echo preg_match_all($pattern3,$txt);
$pattern4="/o{2}/";
// echo preg_match_all($pattern4,$txt);
$pattern5="/o{2,5}/";
// echo preg_match_all($pattern5,$txt);


$txt1="Hello.\nThis is a beauty mooooorning.\nIs everything OK?";
$pattern5="/is/";
// echo preg_match($pattern5,$txt1);
echo preg_match_all($pattern5,$txt1);
echo preg_match_all($pattern5,$txt1,$res);
print_r($res[0]);

echo preg_replace("$pattern","##",$txt);

$pattern6='/[\s:]/';
$data=preg_split($pattern6,$txt);
print_r($data);

$fruits=[
    "Apple",
    "Banana",
    "Orange",
    "Blueberry"
];
$result=preg_grep("/a/i",$fruits);
print_r($result);
$results=preg_grep("/^a/i",$fruits);
print_r($results);
?>