<?php
$myfile=fopen("myName.txt","a") or die("Unable to open file");
$name="Helen Adam22";
fwrite($myfile,$name);
$name="Jordan\n";
$p="Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea deserunt a aut totam temporibus dicta beatae recusandae nobis eum repellendus iure architecto ducimus vitae dolorem autem et, minus consequatur esse.Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea deserunt a aut totam temporibus dicta beatae recusandae nobis eum repellendus iure architecto ducimus vitae dolorem autem et, minus consequatur esse!";

fwrite($myfile,$name);
fwrite($myfile,$p);
fclose($myfile);

?>

<?php 

$myfile=fopen("myName.txt","r") or die ("Unable to open file");
echo "single line date : \n".fgets($myfile)."\n..........................\n";
// echo fread($myfile,filesize("myName.txt"));
// echo fread($myfile,8)."\n";
fclose($myfile);
?>