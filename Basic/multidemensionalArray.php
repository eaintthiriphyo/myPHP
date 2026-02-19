<?php
$students=array(

array("SE101","Jhon","Yangon",23),
array("SE102","Helen","Taungyi",21),
array("SE103","Michel","Mandalay",19),
array("SE104","Adam","Yangon",24),

);

echo "Id : ". $students[0][0] ."name : ".$students[0][1]."address : ".$students[0][2]."age : ".$students[0][3];

foreach($students as $Srow){
    foreach($Srow as $Scell){
        echo $Scell ." ";
    }
    echo "\n";
}

$count=count($students);
for($row=0;$row<$count;$row++){
    $c=count($students[$row]);
    for($col=0;$col<$c;$col++){
        echo $students[$row][$col]." ";
    }
    echo "\n";
}
?>