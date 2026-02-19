<?php

// $domain="Find example.com, sub.domain.org, foo.bar.co.uk from a .a@.domain.com
// paragraph";
// $pattern="/([a-zA-Z0-9-]+\.)+[a-zA-Z]{2,}/";
// preg_match_all($pattern,$domain,$result);
// foreach($result[0] as $res){
//     echo "$res \n";
// }



// $email=readline("Enter email address : ");
// $pattern="/[a-zA-Z0-9-+_.]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/";
// $result=preg_match($pattern,$email)?"Valid Email":"Invalid Emial";
// echo $result;


$phone=readLine("Enter Phone Number :");
$pattern=(bool)preg_match("/^(09|9|\+95)[0-9]{7,10}$/",$phone)?true:false;
if($pattern){
   $phone_con=preg_replace("/^(09|9)/","+959",$phone);
   echo "$phone_con ";
}else{
    echo "Your phone is Invalid";
}