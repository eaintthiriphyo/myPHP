<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       $num1 =$_POST["num1"];
       $num2=$_POST["num2"];
       $op=$_POST["operators"];

       try{

        $number1=$num1?$num1:0;      
        $number2=$num2?$num2:0; 

        if(!preg_match("/[0-9]+$/",trim($number1)) && !preg_match("/[0-9]+$/",trim($number2))){
                throw new Exception ("Both number must be number");
               }

               if(!preg_match("/[0-9]+$/",trim($number1))){
                throw new Exception ("First number must be number");
               }
               if(!preg_match("/[0-9]+$/",trim($number2))){
                throw new Exception ("Second number must be number");
               }
            
                switch($op){
                    case "+":
                        echo $number1+$number2;
                        break;
                    case "-":
                        echo $number1-$number2;
                         break;
                    case "*":
                    echo $number1*$number2;
                     break;
                    case "/":
            
                     if($number2==0){
                     throw new Exception("Divisor not allowed 0");
                     }
                
                          echo $number1/$number2;
                         break;
                     case "%":
                        echo $number1%$number2;
                     break;
                    default:
                        echo "Not operator";
                     }


             }
       catch(Exception $e){
        echo "Error : ".$e->getMessage();
       }

     




    ?>

</body>
</html>