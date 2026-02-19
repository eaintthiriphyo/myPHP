<?php
$i=99;
    while($i>1){
        if($i>50){
            echo "$i\n";
            $i--;
            
        }
         else if($i>10){
            echo "$i\n";
            $i-=2;
            
        }
        else if($i>7){
            echo "$i\n";
            $i-=3;
            
        } 
        
        else if($i>=5){
            echo "$i\n";
            $i-=2;
            
        }
        
        else if($i>1){
            echo "$i\n";
            $i-=1;
            
        }
    }
?>