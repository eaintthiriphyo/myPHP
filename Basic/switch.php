<?php
$day=6;
switch($day){
    case 0:
        echo"Today is Saturday";
        break;
    case 6:
    echo "Today is Sunday";
    break;
    case($day<=5):
        echo"Working days";
        break;
        default:echo "Try Again";
}

?>