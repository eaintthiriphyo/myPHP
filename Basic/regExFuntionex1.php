<?php
$name=readline("Enter a name : ");
$pattern="/^[a-zA-Z][a-zA-Z0-9_]{2,15}$/";
$result=(bool)preg_match($pattern,$name)?"Yes":"No";
echo "$result";



?>