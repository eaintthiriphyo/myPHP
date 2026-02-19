<?php
echo "Enter Your Password :";
$password = trim(fgets(STDIN));

 $strength=(strlen($password)<8)?"Weak":
            ((preg_match('/[0-9]/',$password)&&
            preg_match('/[A-Z]/',$password)&&
            preg_match('/[\W_]/', $password)) ? "Strong" : "Medium");
             echo $strength;

?>