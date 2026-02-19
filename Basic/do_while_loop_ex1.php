<?php
$i=1;

do{
    $pwd=readline("Enter Password : ");
    if($pwd=="admin"){
        echo"Login Successful!Welcome From my Web";
        break;
    }else{
        echo "Wrong Password ($i/3) \n";
       
    }
   
    $i++;
      if($i>3){
         echo "Logout!!";

    }
    
}while($i<=3);

?>