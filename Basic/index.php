<?php
// echo "Hello World";

// $name="Jhon Doe";
// $age=23;
// $price=19.99;

// var_dump($name);
// var_dump($age);
// var_dump($price);

// echo "The name is ".$name."\n";
// echo "Age is ",$age,"\n";
// echo "The name is $name \n Age is $age \n";
// echo 'Name is $name '.$name;

$x=5;




function testing(){
    static $age=20;
    echo "1. Values in x is ".$age."\n";
    $age=$age+3;
}

testing();
testing();
testing();
echo "2.Values in x is $age";

//Array Writing style
$fruits=array(1,"apple","banana",true);

$colors=["red","green","blue"];
// var_dump($colors);
echo $colors[1],"\n";

$people=array(
    "name"=>"Min Thway Khant",
    "age"=>23
);

echo $people["name"];
// var_dump($fruits);
?>