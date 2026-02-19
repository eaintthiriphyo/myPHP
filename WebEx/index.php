<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
    Number 1 : <input type="text" name="number1" /><br><br>
    Number 2 : <input type="text" name="number2" /><br><br>
    <button type="submit" name="action" value="add" >Add</button>
    <button type="submit" name="action" value="sub" >Sub</button>
    <button type="submit" name="action" value="mul" >Mul</button>
    <button type="submit" name="action" value="div" >Div</button>
    <button type="submit" name="action" value="mod" >Mod</button>
    <button type="submit" name="action" value="reset" >Reset</button>

     <br>

   
   


    </form>


    <?php
    $num1="";
    $num2="";
    $result=0;
    
    if($_SERVER["REQUEST_METHOD"]==="POST"){
       $num1 = (int) ($_POST["number1"] ?? 0);
        $num2 = (int) ($_POST["number2"] ?? 0);

        if(($_POST["action"] ?? " ")==="add"){
            $result=$num1+$num2;
        }
        if(($_POST["action"] ?? " ")==="sub"){
            $result=$num1-$num2;
        }
        if(($_POST["action"] ?? " ")==="mul"){
            $result=$num1*$num2;
        }

        if(($_POST["action"] ?? " ")==="div"){
            if($num2==0){
                echo "<h2>Error : Divisor not allowed Zero.</h2>";
                exit();
            }
            $result=$num1/$num2;
        }
        if(($_POST["action"] ?? " ")==="mod"){
            if($num2==0){
                echo "<h2>Error : Divisor not allowed Zero.</h2>";
                exit();
            }
            $result=$num1%$num2;
        }
         if(($_POST["action"] ?? " ")==="result"){
           $num1="";
           $num2="";
            
        }


               echo"<h2>Result : $result</h2>"  ;       


    }

    ?>
</body>
</html>