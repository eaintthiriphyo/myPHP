<?php
echo("Enter Your Business Hours : ");
$hour=(int)(trim(fgets(STDIN)));
switch($hour){
  
    case ($hour>=7 && $hour<=8):
        echo "Business is nearly Open";
        break;
    case ($hour>=9 && $hour<=17):
        echo "Business is Open";
        break;
    case ($hour>=18 && $hour<=21):
        echo "Business is nearly closed";
        break;
          case ($hour < 0 || $hour > 23):
        echo"Invalid Input";
        break;
    default:
        echo"Business is Closed";
       
}

?>