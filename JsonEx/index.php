<?php

$data=[
    "name"=>"Jhon",
    "age"=>23,
    "city"=>"Yangon"
];
$jobj=json_encode($data);
//echo $jobj;

$data1=json_decode($jobj,true);
var_dump($data1);
// echo $data1->name;
// echo $data1["name"];


foreach($data1 as $key=>$v){
    echo "$key : $v\n";
}
?>