<?php
$randNum = rand(1, 20); 
echo "Random Number is $randNum \n";
$i=0;
do{
   
    $userNum=(int)(readline("Enter Guess Number (1-20): "));
    if($userNum>20){
        echo "Please Enter between 1 and 20\n";
    }else{
            if($userNum<$randNum){
             echo "Higher\n";
             }elseif($userNum>$randNum){
             echo "lower\n";
         }
    }
   
    $i++;

}while($userNum!=$randNum);
echo "Correct $i times";
?>