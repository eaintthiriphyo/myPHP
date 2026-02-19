<?php

function accountWealth($account){
    $arow=count($account);
      $max=0;
      $wealthyUser;
       
    for($i=0;$i<$arow;$i++){
        $acell=count($account[$i]);
        $total=0;
        for($j=0;$j<$acell;$j++){
    $total+=$account[$i][$j];
        }
    if($max<$total){
        $max=$total;
        $wealthyUser=++$i;

    }
    }

      echo "The $wealthyUser customer is the richest with a wealth of $max\n";

    
}
$account=[
    [1,5,100],
    [7,3],
    [9,500]
    ];
accountWealth($account);
?>