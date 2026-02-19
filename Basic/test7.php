<?php
$name="Jhon";
$password="jhon123";

echo"Enter UserName : ";
$username=trim(fgets(STDIN));
echo"Enter Password :";
$userPass=trim(fgets(STDIN));
if( $username!=$name && $userPass!=$password){
    echo "Try again";
}elseif($username!=$name){
    echo"Invalid user name";
}elseif($userPass!=$password){
    echo"Invalid password";
}else{
    echo "Login successful";
}


?>